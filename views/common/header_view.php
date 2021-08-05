<?php 
ini_set("error_reporting","E_ALL & ~E_NOTICE");
session_start(); 
site_hits(); ?>
<?php $login_member = $this->web_library->get_login_member(); ?>

<!DOCTYPE html>
<html lang="zh-TW" ng-app=''>
<head>
    <title><?=web_config('site_name') ?></title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="keywords" content="<?=web_config('meta_keyword') ?>"/>
    <meta name="description" content="<?=web_config('meta_desc') ?>"/>

	<link href="<?=base_url() ?>favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="<?=base_url_css() ?>/preloader.css" rel="stylesheet">
	<link href="<?=base_url_css() ?>/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url_css() ?>/font-awesome.min.css" rel="stylesheet">
	<link href="<?=base_url_css() ?>/animate.css" rel="stylesheet">
	<link href="<?=base_url_css() ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <script src="<?=base_url_js() ?>/jquery-2.1.3.min.js"></script>


    <!-- AJ -->
    <link href="<?=base_url_css() ?>/web/web.css?r=<?=random_string('unique') ?>" rel="stylesheet" type="text/css"/>

    <script>
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
    <!-- AJ END -->
</head>

<?

ini_set("error_reporting","E_ALL & ~E_NOTICE");
$NRID = $_GET['RID'];
$NClick_ID = $_GET['Click_ID'];

if ($NRID != "") {
    $_SESSION['NOWINRID'] = $NRID;
	$_SESSION['NOWINCLICKID'] = $NClick_ID;
}
?>


<body>

    <!-- Preloader -->
    <div class="preloader"></div>
    
    
    
    <!-- HEADER -->
    <header class="header header-dark navbar-fixed-top ">
    	<nav class="navbar container">
    		<div class="col-sm-3">
    			<?php
                    $banner_item = get_banner_item_by_code(300);
                    if($banner_item && $banner_item['path']) :
                ?>
                    <a href="<?=base_url() ?>" class="navbar-brand"><img alt="<?=web_config('site_name') ?>" src="<?=base_url_upload_images().$banner_item['path'] ?>" style="padding-top: 40px; padding-bottom: 20px; width: 280px;" /></a>
                <?php else: ?>
                    <a href="<?=base_url() ?>" class="navbar-brand"><?=web_config('site_name') ?></a>
                <?php endif; ?>
			</div>

			<button class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div id="navbar" class="navbar-collapse collapse">

				<ul class="nav navbar-nav pull-right">
					<?php if($login_member): ?>
                        <li><a href="<?=base_url() ?>member/modify">會員中心</a></li>
                        <li><a href="<?=base_url() ?>member/logout"><i class="fas fa-sign-out-alt"></i>登出</a></li>
                    <?php else: ?>
                        <li><a href="<?=base_url() ?>member"><i class="fas fa-sign-in-alt"></i>登入</a></li>
                        <li><a href="<?=base_url() ?>member/signup"><i class="fa fa-edit"></i>註冊</a></li>
                    <?php endif; ?>
                    <li><a href="<?=base_url() ?>cart"><i class="fa fa-shopping-cart"></i>購物車</a></li>
				</ul>

				<ul class="nav navbar-nav pull-left">
					<li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle">關於我們</a>
						<ul class="dropdown-menu">
							<li><a href="<?=base_url() ?>article/about/201/199">關於中油</a></li>
                            <li><a href="<?=base_url() ?>article/about/201/200">潤滑油事業部</a></li>
                            <li><a href="<?=base_url() ?>article/about/201/202">營運方針</a></li>
                            <li><a href="<?=base_url() ?>article/about/201/203">企業社會責任</a></li>
						</ul>
					</li>
                    <li>
						<a href="<?=base_url() ?>article/news">最新消息</a>
					</li>
					<li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle">潤滑天地</a>
                        <ul class="dropdown-menu">
							<li><a href="<?=base_url() ?>article/learning">潤滑小教室</a></li>
                            <li><a href="<?=base_url() ?>article/topic_detail/207/198">潤滑專題</a></li>
                            <li><a href="<?=base_url() ?>article/interview">專題集萃</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle">服務與支援</a>
                        <ul class="dropdown-menu">
							<li><a href="<?=base_url() ?>article/Safety">潤滑油安全資料</a></li>
                            <li><a href="https://drive.google.com/file/d/1uHEYiUaPhvFNU5qHPf0sbkp8L0HZjOpb/view" target="blank">國光牌牌價表</a></li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown" class="dropdown-toggle">服務據點</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url() ?>article/units">潤滑油事業部</a></li>
                                    <li><a href="https://web.cpc.com.tw/division/mb/service-search.aspx" target="blank">中油公司自營加油站車輛快速保養中心查詢</a></li>
                                </ul>
                            </li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="<?=base_url() ?>article/CPC" data-toggle="dropdown" class="dropdown-toggle" style="color:blue;">國光牌</a>
                        <ul class="dropdown-menu">
							<li><a href="<?=base_url() ?>article/CPCbrand">品牌介紹</a></li>
                            <li><a href="<?=base_url() ?>article/CPCinfo">產品資訊</a></li>
                            <li class="dropdown">
                            	<a href="" data-toggle="dropdown" class="dropdown-toggle">多媒體專區</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url() ?>article/CPCvideo">影音專區</a></li>
                                    <li><a href="<?=base_url() ?>article/CPCposter">文宣品下載</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="<?=base_url() ?>article/about_detail/211" data-toggle="dropdown" class="dropdown-toggle">經銷通路</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url() ?>article/CPCdealer/211/133">潤滑油脂經銷商</a></li>
                                    <li><a href="<?=base_url() ?>article/CPCdealer/211/134">外銷經銷商</a></li>
                                    <li><a href="<?=base_url() ?>article/CPCdealer/211/135">大賣場專業經銷商</a></li>
                                </ul>
                            </li>
                            
						</ul>
					</li>
                    <li class="dropdown">
						<a href="<?=base_url() ?>article/MiRAGE" data-toggle="dropdown" class="dropdown-toggle" style="color:red;">美耐吉</a>
                        <ul class="dropdown-menu">
							<li><a href="<?=base_url() ?>article/MiRAGEbrand">品牌介紹</a></li>
                            <li><a href="<?=base_url() ?>article/MiRAGEinfo">產品資訊</a>	</li>
                            <li class="dropdown">
                            	<a href="" data-toggle="dropdown" class="dropdown-toggle">多媒體專區</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url() ?>article/MiRAGEvideo">影音專區</a></li>
                                    <li><a href="<?=base_url() ?>article/MiRAGEposter">文宣品下載</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="<?=base_url() ?>article/about_detail/215" data-toggle="dropdown" class="dropdown-toggle">經銷通路</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url() ?>article/MiRAGEdealer/215/139">機油經銷商聯絡資訊</a></li>
                                    <li><a href="<?=base_url() ?>article/MiRAGEdealer/215/140">汽車用油列名店家服務據點</a></li>
                                    <li><a href="<?=base_url() ?>article/MiRAGEscooter">APEX 機車用油專賣店</a></li>
                                    <li><a href="<?=base_url() ?>article/MiRAGEdealer/215/209">快保中心嘉義旗艦店</a></li>
                                </ul>
                            </li>
						</ul>
					</li>
					<li><a href="<?=base_url() ?>product/category">購物商店</a></li>
					<!--li>
						<a href="<?=base_url() ?>contact">連絡我們</a>
					</li-->

				</ul>
			</div>

		</nav>
	</header>
	<!-- /.header -->
    

    