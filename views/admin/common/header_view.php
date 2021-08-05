<?php $login_administrator = $this->admin_library->get_login_administrator(); ?>

<!DOCTYPE html>
<html lang="zh-TW" ng-app=''>
<head>
	<meta charset="utf-8"/>
	<title><?=web_config('site_name') ?> 管理後台</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content=""/>

	<!-- The styles -->
	<link href="<?=base_url_css() ?>/admin/bootstrap-spacelab.min.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/charisma-app.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/jquery-ui-1.8.21.custom.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/fullcalendar.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/fullcalendar.print.css" rel="stylesheet"  media="print"/>
	<link href="<?=base_url_css() ?>/admin/chosen.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/uniform.default.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/colorbox.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/jquery.cleditor.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/jquery.noty.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/noty_theme_default.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/elfinder.min.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/elfinder.theme.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/jquery.iphone.toggle.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/opa-icons.css" rel="stylesheet"/>
	<link href="<?=base_url_css() ?>/admin/uploadify.css" rel="stylesheet"/>
    
    <!-- css -->
    <link href="<?=base_url_css() ?>/admin/admin.css" rel="stylesheet"/>
    <link href="<?=base_url() ?>favicon.png" rel="shortcut icon" type="image/x-icon">    
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- jQuery -->
	<script src="<?=base_url_js() ?>/admin/jquery-1.7.2.min.js"></script>

    <?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
        
        <!-- plugin -->
        <script src="<?=base_url_plugin() ?>/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?=base_url_plugin() ?>/jquery-validation/messages_zh_TW.js"></script>
        <script src="<?=base_url_plugin() ?>/ckeditor/ckeditor.js"></script>
        <script src="<?=base_url_plugin() ?>/ckfinder/ckfinder.js"></script>    
        
        <!-- javascript -->
        <script src="<?=base_url_js() ?>/jquery.timers.js"></script>
        <script src="<?=base_url_js() ?>/angular.min.js"></script>
        <script src="<?=base_url_js() ?>/jquery.query.js"></script>
        <script src="<?=base_url_js() ?>/aj-address.js"></script>
        <script src="<?=base_url_js() ?>/aj-birthday.js"></script>
        <script src="<?=base_url_js() ?>/common.js"></script>
        <script src="<?=base_url_js() ?>/admin/aj-thumbnails.js"></script>
        <script src="<?=base_url_js() ?>/admin/admin.js"></script>
    
        <script>
            //倒數計時
            var expire = <?=$this->admin_library->get_cookie('expire'); ?>;
            var now = Math.round(new Date().getTime() / 1000);
            var total_second = expire - now;
            
            var base_url = '<?=base_url() ?>';
            var current_url = '<?=current_url() ?>';
            var base_url_admin = '<?=base_url_admin() ?>';
            var base_url_js = '<?=base_url_js() ?>';
            var base_url_css = '<?=base_url_css() ?>';
            var base_url_images = '<?=base_url_images() ?>';
            var base_url_img = '<?=base_url_img() ?>';
            var base_url_plugin = '<?=base_url_plugin() ?>';
            var base_url_upload_images = '<?=base_url_upload_images() ?>';
            var base_url_upload_thumbs = '<?=base_url_upload_thumbs() ?>';
        </script>
    
    <?php } ?>
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	
    <?php include('menu_top_view.php'); ?>
    
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
        
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<?php include('menu_left_view.php'); ?>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
            