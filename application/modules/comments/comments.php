<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Image CMS
 *
 * Comments component
 */

class Comments extends Controller {

    public $period             = 5;      // Post comment period in minutes. If user is unregistered, check will be made by ip address. 0 - To disable this method.
    public $default_lang       = 'russian';
    public $can_comment        = 0;      // Possible values: 0 - all, 1 - registered only.
    public $max_comment_length = 500;    // Max. comments text lenght.
    public $use_captcha        = FALSE;  // Possible values TRUE/FALSE;
    public $cache_ttl          = 86400;

    public $use_moderation     = TRUE;


    public function __construct()
	{
		parent::Controller();
        $this->load->module('core');
	}

	/**
	 * Default function to access module by URL
	 */
	public function index()
	{
        return FALSE;     
	}

	/**
	 * Autoload function. Load language and comments.
	 */
	public function autoload()
    {
        $this->load->helper('cookie');

        // Load language
        $lang = $this->config->item('language');
        $lang_file = @realpath(dirname(__FILE__)).'/language/'.$lang.'_lang.php';

        if (file_exists($lang_file))
        {
            $this->load->language($lang);  
        }
        else
        {
            $this->load->language($this->default_lang);
        }

        // Build comments only for pages with comments_status 1
        if ($this->core->core_data['data_type'] == 'page' AND $this->core->page_content['comments_status'] == 1 )
        {    
            $this->build_comments($this->core->page_content['id']);
        }
        else
        {
			return FALSE;
		}
	}

    private function init_settings()
    {
        $settings = $this->base->get_settings();

        foreach ($settings as $k => $v)
        {
            $this->$k = $v; 
        }
    }

    /**
     * Fetch comments and load template
     */ 
	public function build_comments($item_id = 0)
    {
        $this->load->model('base');
        $this->init_settings();

        if (($comments = $this->cache->fetch('comments_'.$item_id, 'comments')) !== FALSE)
        {
            // Comments fetched from cahce file
        }else{
            $comments = $this->base->get($item_id);

            // Read comments template
            // Set page id for comments form
            if($comments != FALSE)
            {
                $this->cache->store('comments_'.$item_id, $comments, $this->cache_ttl, 'comments');
            }
        }

        $data = array(
            'comments_arr'   => $comments,
            'total_comments' => lang('lang_total_comments').count($comments),
            'can_comment'    => $this->can_comment,
            'use_captcha'    => $this->use_captcha,
            'item_id'        => $item_id
        );

        if ($this->use_captcha == TRUE)
        {
            $this->dx_auth->captcha();
            $data['cap_image'] = $this->dx_auth->get_captcha_image();

        }

        $comments = $this->template->read('comments', $data); 

        $this->template->add_array(array( 
                'comments' => $comments
                ));
	}

    /**
     * Add comment
     */ 
	public function add()
    {
        // Load comments model
        $this->load->model('base');
        $this->init_settings();

		// Check access only for registered users
		if ($this->can_comment === 1 AND $this->dx_auth->is_logged_in() == FALSE)
        {
			$this->core->error(lang('login_for_comments'));
        }

        $item_id = $this->input->post('comment_item_id');

        // Check if page comments status.
        if ($this->base->get_item_comments_status($item_id) == FALSE)
        {
            $this->core->error(lang('error_comments_diabled'));
        }        

        $this->load->library('user_agent');
        $this->load->library('form_validation');

        // Check post comment period.
        if ($this->period > 0)
        if ($this->check_comment_period() == FALSE)
        {
            $this->core->error( sprintf(lang('error_comments_period'), $this->period) );
        }
    
        // Validate email and nickname from unregistered users.
        if ($this->dx_auth->is_logged_in() == FALSE)
        {
		    $this->form_validation->set_rules('comment_email',  'lang:lang_comment_email',  'trim|required|xss_clean|valid_email');
		    $this->form_validation->set_rules('comment_author', 'lang:lang_comment_author', 'trim|required|xss_clean|max_length[50]');
		    $this->form_validation->set_rules('comment_site',   'lang:lang_comment_site', 'trim|xss_clean|max_length[250]');
        }

        // Check captcha code if captcha_check enabled and user in not admin.
        if ($this->use_captcha == TRUE AND $this->dx_auth->is_admin() == FALSE)
        {
            $this->form_validation->set_rules('captcha', lang('lang_captcha'), 'trim|required|xss_clean|callback_captcha_check');
        }

		$this->form_validation->set_rules('comment_text',   'lang:lang_comment_text',   'trim|required|xss_clean|max_length['.$this->max_comment_length.']');

		if ($this->form_validation->run() == FALSE)
		{
			$this->core->error( validation_errors() );
		}
		else
		{
            if ($this->dx_auth->is_logged_in() == FALSE)
            {
                $comment_author = trim(htmlspecialchars($this->input->post('comment_author')));
                $comment_email  = trim(htmlspecialchars($this->input->post('comment_email')));

                // Write on cookie nickname and email
                $this->_write_cookie($comment_author, $comment_email, $this->input->post('comment_site'));
            }
            else
            {
                $user = $this->db->get_where('users', array('id' => $this->dx_auth->get_user_id()))->row_array();
                $comment_author = $user['username'];
                $comment_email  = $user['email'];
            }

            $comment_text = trim(htmlspecialchars($this->input->post('comment_text')));
            $comment_text = str_replace("\n", '<br/>', $comment_text); 
     
            if($comment_text != '')
            {
                $comment_data = array(
                                    'user_id'   => $this->dx_auth->get_user_id(), // 0 if unregistered
                                    'user_name' => $comment_author,
                                    'user_mail' => $comment_email,
                                    'user_site' => $this->input->post('comment_site'),
                                    'text'      => $comment_text,
                                    'item_id'   => $item_id,
                                    'status'    => $this->_comment_status(),
                                    'agent'     => $this->agent->agent_string(),
                                    'user_ip'   => $this->input->ip_address(),
                                    'date'      => time(),
                                    );
                
                $id = $this->base->add($comment_data);

                if ($comment_data['status'] == 0)
                {
                    $this->db->set('comments_count', 'comments_count + 1', FALSE);
                    $this->db->where('id', $comment_data['item_id']);
                    $this->db->update('content');
                }

                // Drop cached comments
                $this->cache->delete('comments_'.$item_id, 'comments');

                // Redirect back to page
                // TODO: add lang prefix to url
                $this->db->limit(1);
                $this->db->select('id, url, cat_url');
                $page = $this->db->get_where('content', array('id' => $item_id))->row_array(); 
                
                if ($page['cat_url'] == '0') 
                { 
                    $page['cat_url'] = '';
                }

                redirect($page['cat_url'].$page['url'].'#comment_'.$id, 'refresh');
            }else{
                $this->core->error( lang('error_comments_text') );
            }
		}
    }

    /**
     * Determinate comment status.
     *
     *  Comment statuses
     *  0 - Normal(approved) comment.
     *  1 - Waiting for moderation(pending).
     *  2 - Spam.
     */
    private function _comment_status()
    {
        $status = 0;

        if ($this->dx_auth->is_admin() == TRUE)
        {
            return 0;
        }

        if ($this->use_moderation == TRUE)
        {
            $status = 1;
        }
        elseif ($this->use_moderation == FALSE)
        {
            $status = 0;
        }

        return $status;
     }

    /**
     * Write in cookie author nickname and email
     */
    private function _write_cookie($name, $email, $site)
    {
        $this->load->helper('cookie');

        $cookie_name = array(
                        'name'   => 'comment_author',
                        'value'  => $name,
                        'expire' => '30000000',
                       );

        $cookie_email = array(
                        'name'   => 'comment_email',
                        'value'  => $email,
                        'expire' => '30000000',
                       );

        $cookie_site = array(
                        'name'   => 'comment_site',
                        'value'  => $site,
                        'expire' => '30000000',
                       );


        set_cookie($cookie_name);
        set_cookie($cookie_email);
        set_cookie($cookie_site);

        return TRUE;
    }

    private function check_comment_period()
    {
        if ($this->dx_auth->is_admin() == TRUE)
        {
            return TRUE;
        }
        
        $this->db->select('id, date');
        $this->db->order_by('date', 'desc');

        if ($this->dx_auth->is_logged_in() == TRUE)
        {
            $this->db->where('user_id', $this->dx_auth->get_user_id());
        }
        else
        {
            $this->db->where('user_ip', $this->input->ip_address());
        }

        $query = $this->db->get('comments', 1); 

        if ($query->num_rows() == 1)
        {
            $query = $query->row_array();

            $latest_comment = $query['date'];
            $allow_time = $latest_comment + ($this->period * 60);

            if ($allow_time > time())
            {
                return FALSE;
            }else{
                return TRUE;
            }
        }else{
            return TRUE;
        }
    }

	public function captcha_check($code)
	{
	    $result = TRUE;

		if ($this->dx_auth->is_captcha_expired())
		{
			$this->form_validation->set_message('captcha_check', lang('lang_captcha_error'));
			$result = FALSE;
		}
		elseif ( ! $this->dx_auth->is_captcha_match($code))
		{
			$this->form_validation->set_message('captcha_check', lang('lang_captcha_error'));
			$result = FALSE;
		}

		return $result;
	}

}

/* End of file comments.php */
