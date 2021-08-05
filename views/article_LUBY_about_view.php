<?php include('common/header_view.php'); ?>


    <!-- WRAPPER -->
	<div class="wrapper border">
		<!-- banner -->
        <div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(416);
               if($banner_item && $banner_item['path']) :
			?>
				   <img alt="<?=web_config('site_name') ?>" src="<?=base_url_upload_images().$banner_item['path'] ?>" style="width:100%;"/>
		
			<?php endif; ?>
        </div>
        <!-- banner -->
		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
					<h1>品牌介紹</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->
		<div class="container post format-standart">
        	<div id="navbar" class="navbar-collapse collapse">	
                <ul class="nav navbar-nav">
                    <p><a href="<?=base_url() ?>"><i class="fas fa-home"></i>首頁</a>
                    <i class="fas fa-angle-right"></i>
                    <a href="<?=base_url() ?>article/CPC">國光牌</a>
                    <i class="fas fa-angle-right"></i>
                    <a href="<?=base_url() ?>article/LUBY_about">國光小英雄</a>
                    <i class="fas fa-angle-right"></i>
                    <a href="<?=base_url() ?>article/LUBY_about">關於LUBY</a></p>
                </ul>
            </div>
            <br>
            
           
		
            
			<!-- CONTAINER -->
			<div class="container no-padding max-410 inforow">
				<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<?php include('common/LUBY_sidebar_view.php'); ?>
				</div>
				<div class="col-sm-8 hidden-middle m-padding" style="padding-left: 30px; padding-right: 30px;">
					<?php
                    $article_item = get_article_item_web(111);
                    
                    if($article_item):
					?>
						<p><?=$article_item['content'] ?></p>
					<?php endif; ?>
				</div>
			</div>
			<!-- /.container -->
		</div>

	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>