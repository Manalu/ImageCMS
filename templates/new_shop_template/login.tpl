{#
/**
* @file template for displaying login page
*/
#}

<!-- Adds meta tag for this page -->
{$this->registerMeta('<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">')}
<article>
    <!-- bread crumbs container -->
    <div class="crumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
        <span typeof="v:Breadcrumb">
            <a href="{site_url()}" rel="v:url" property="v:title">{lang('s_main_home')}</a>
        </span>/
        <span typeof="v:Breadcrumb">
            <span rel="v:url" property="v:title">{lang('lang_login_page')}</span>
        </span>
    </div>
    <div class="t-a_c">
        <div class="row d_i-b t-a_l">
            <div class="span6">
                <div class="frameGroupsForm">
                    <div class="header_title">
                        {lang('lang_login_page')}
                    </div>
                    <div class="inside_padd">
                        <div class="horizontal_form standart_form">
                            <!-- login form -->
                            <form method="post" id="login_form">
                                <label>
                                    <span class="title">{lang('lang_email')}</span>
                                    <span class="frame_form_field">
                                        <span class="icon-email"></span>
                                        <!-- input for email -->
                                        <input value="Введите Ваш логин" type="text" name="email" onfocus="if (this.value == 'Введите Ваш логин')
                                                    this.value = '';" onblur="if (this.value == '')
                                                    this.value = 'Введите Ваш логин';"/>
                                        <!-- validation error container -->
                                        <div id="for_email" class="for_validations"></div>
                                    </span>
                                </label>
                                <label>
                                    <span class="title">{lang('lang_password')}</span>
                                    <span class="frame_form_field">
                                        <span class="icon-password"></span>
                                        <!-- input for password -->
                                        <input type="password" name="password" value="{lang('lang_password')}" onfocus="if (this.value == '{lang('lang_password')}')
                                                    this.value = '';" onblur="if (this.value == '')
                                                    this.value = '{lang('lang_password')}';"/>
                                        <!-- validation error container -->
                                        <div id="for_password" class="for_validations"></div>
                                    </span>
                                </label>
                                <!-- captcha block -->
                                {if $cap_image}
                                    <lable>
                                        <span class="title">{$cap_image}</span>
                                        <span class="frame_form_field">
                                            {if $captcha_type == 'captcha'}
                                                <input type="text" name="captcha" id="captcha" value="{lang('lang_captcha')}" onfocus="if (this.value == '{lang('lang_captcha')}')
                                                    this.value = '';" onblur="if (this.value == '')
                                                    this.value = '{lang('lang_captcha')}';"/>
                                            {/if}
                                        </span>
                                    </lable>
                                {/if}
                                <label>
                                    <span class="title">{lang('lang_remember_me')}</span>
                                    <span class="frame_form_field">
                                        <!--input for remember me option-->
                                        <input type="checkbox" name="remember" value="1" id="remember" class="d_i v-a_b"/>
                                        <div id="for_password" class="for_validations"></div>
                                    </span>
                                </label>
                                <div class="frameLabel">
                                    <span class="title">&nbsp;</span>
                                    <span class="frame_form_field c_n">
                                        <!--forgot password link-->
                                        <a href="/auth/forgot_password" class="d_i v-a_m neigh_btn m-r_45">{lang('lang_forgot_password')}</a>
                                        <!--registration link-->
                                        <a href="{site_url($modules.auth . '/register')}" class="d_i v-a_m neigh_btn m-r_45">{lang('lang_register')}</a>
                                        <!--submit button-->
                                        <input type="button" value="Войти" class="btn btn_cart f_r" onclick="ImageCMSApi.formAction('/auth/authapi/login', 'login_form');
                                                return false;"/>
                                    </span>
                                </div>
                                <!--security token-->
                                {form_csrf()}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
