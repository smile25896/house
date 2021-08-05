<?php include('common/header_view.php'); ?>


    <!-- WRAPPER -->
	<div class="wrapper border">
		<!-- banner -->
        <div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(414);
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
					<h1>文宣品下載</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<div class="container post format-standart">
        	<div id="navbar" class="navbar-collapse collapse">	
                <ul class="nav navbar-nav">
                    <p><i class="fas fa-home"></i>首頁
                    <i class="fas fa-angle-right"></i>
                    國光牌
                    <i class="fas fa-angle-right"></i>
                    多媒體專區
                    <i class="fas fa-angle-right"></i>
                    文宣品下載</p>
                </ul>
            </div>
            <br>
			<!-- CONTAINER -->
			<div class="container no-padding max-410 inforow">
				<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<?php include('common/CPCvideo_sidebar_view.php'); ?>
				</div>
				<div class="col-sm-8 hidden-middle m-padding" style="padding-left: 30px; padding-right: 30px;">
                	<div class="text-center magnific-wrap">
                        <div class="img-medium slider oneslider">
                            <ul data-speed-animation="1000">
                                <?php
                                    $banner_list = get_banner_list_web(417, 'sort', 'ASC');
                                    
                                    foreach($banner_list as $banner_item) :
                                        if($banner_item['path']) :
                                ?>
                                    <li><a href="<?=base_url_upload_images().$banner_item['path'] ?>" title="<?=$name ?>" class="magnific"><img src="<?=base_url_upload_images().$banner_item['path'] ?>" alt="<?=$name ?>" style=" width:70%;"></a></li>
                                <?php
                                        endif;
                                    endforeach;
                                ?>
                            </ul>
                            <div class="product-nav">
                                <a href="" class="product-prev arrow prev"><i></i></a>
                                <div class="product-count"></div>
                                <a href="" class="product-next arrow next"><i></i></a>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- /.container -->
		</div>

	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>