<?php include('common/header_view.php'); ?>

    <!-- WRAPPER -->
    <div class="wrapper">
    	<!-- banner -->
        <div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(413);
               if($banner_item && $banner_item['path']) :
			?>
				   <img alt="<?=web_config('site_name') ?>" src="<?=base_url_upload_images().$banner_item['path'] ?>" style="width:100%;"/>
		
			<?php endif; ?>
        </div>
        <!-- banner -->
			<!-- HEADCONTENT -->
            <div class="headcontent" style=" background-color: #e70012;">
                <div class="container">
                    <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                        <h1><?=$title ?></h1>
                    </div>
                </div>
            </div>
            <!-- /.headcontent -->
			
			<!-- CONTAINER -->
			<div class="container post format-standart">
            	<div id="navbar" class="navbar-collapse collapse">	
                    <ul class="nav navbar-nav">
                        <p><i class="fas fa-home"></i>首頁
                        <i class="fas fa-angle-right"></i>
                        美耐吉
                        <i class="fas fa-angle-right"></i>
                        經銷通路
                        <i class="fas fa-angle-right"></i>
                        <?=$title ?></p>
                    </ul>
                </div>
                <br>
				<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<?php include('common/MiRAGEdealer_sidebar_view.php'); ?>
				</div>
				<div class="col-sm-9" style="padding-left: 30px; padding-right: 30px;">
					<div class="post format-standart">
						<div class="entry-content">
							<?=$content ?>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->
		 </div>
    </div>
    <!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>