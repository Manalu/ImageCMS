<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>{$site_title}</title>
        <meta name="description" content="{$site_description}" />
        <meta name="keywords" content="{$site_keywords}" />
        <meta name="generator" content="ImageCMS" />
        {$meta_noindex}
        <link rel="stylesheet" type="text/css" href="{$SHOP_THEME}css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{$SHOP_THEME}/css/jquery.fancybox-1.3.4.css" media="all" />

        <link rel="icon" type="image/x-icon" href="{$SHOP_THEME}images/favicon.png"/>
		<!--[if lte IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{$SHOP_THEME}/css/lte_ie_8.css" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="{$SHOP_THEME}/css/ie_7.css" /><![endif]-->
        <script type="text/javascript" src="{$SHOP_THEME}/js/jquery-1.8.3.min.js"></script>
        {$gmeta}
    </head>
    <body>
        <div class="main-body">
            <div class="fon-header">
                <header>
                    {include_tpl('shop/header')}
                </header>
                {echo ShopCore::app()->SCategoryTree->ul()}
            </div>
            {$content}
			<div class="h-footer"></div>
		</div>
        <footer>
            {include_tpl('shop/footer')}
        </footer>
        {include_tpl('shop/drop_data')}

        <script type="text/javascript" src="{$SHOP_THEME}js/jquery.pluginssiteimage.min.js"></script>
        <script type="text/javascript" src="{$SHOP_THEME}js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="{$SHOP_THEME}js/scripts.js"></script>
        <script type="text/javascript" src="{$SHOP_THEME}js/cusel-min-2.5.js"></script>
        <script type="text/javascript" src="{$SHOP_THEME}js/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="{$SHOP_THEME}js/shop_script/code.js"></script>
    </body>
</html>