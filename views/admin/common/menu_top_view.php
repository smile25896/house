<!-- topbar starts -->
<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="<?=base_url_admin() ?>/home"><?=web_config('site_name') ?></a>
			
			<!-- user dropdown starts -->
			<div class="btn-group pull-right" >
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="icon-user"></i><span class="hidden-phone"> <?=$login_administrator['name'] ?></span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?=base_url_admin() ?>/message">個人訊息</a></li>
					<li><a href="<?=base_url_admin() ?>/logout">登出</a></li>
                    <li class="divider"></li>
                    <li><a href="http://tw.piliapp.com/symbol/" target="_blank">特殊符號</a></li>
                    <li><a href="<?=base_url() ?>home/rwd?url=<?=base_url() ?>" target="_blank">RWD 畫面尺寸</a></li>
				</ul>
			</div>
			<!-- user dropdown ends -->
            
			<div class="alert alert-error btn-group pull-right top_area" id="countdown_area">
				<i class="icon-time"></i> <span id="countdown"></span>
			</div>
			
			<div class="alert alert-error btn-group pull-right top_area" id="now_area">
				<span id="now"></span>
			</div>
            
			<div class="top-nav nav-collapse">
				<ul class="nav">
					<li><a href="<?=base_url() ?>" target="_blank">瀏覽前台</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
<!-- topbar ends -->