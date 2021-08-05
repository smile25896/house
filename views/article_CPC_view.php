<?php include('common/header_view.php'); ?>


    <!-- WRAPPER -->
	<div class="wrapper border">
    	<!-- banner -->
        <div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(404);
               if($banner_item && $banner_item['path']) :
			?>
				   <img alt="<?=web_config('site_name') ?>" src="<?=base_url_upload_images().$banner_item['path'] ?>" style="width:100%;"/>
		
			<?php endif; ?>
        </div>
        <!-- banner -->
        
        <!--div class="container" style="width: 100%;  background-color:#fff;">
        	<div class="col-md-2">
            </div>
        	<div class="col-md-7" style="padding:50px;">
                <h1 style=" color:#428bca;font-size: 30px;"><strong>國光牌-有使命感的品牌</strong></h1>
                <h2 style=" color:#333;font-size: 24px;"><strong>「國光牌」潤滑油脂行銷市場六十餘年，長期以來擔負安定價格，輔佐工業發展。以完備的產品線滿足多樣化的市場需求，卓越品質和出色服務深受社會各界肯定，因而成為台灣領導品牌。</strong></h2>
            </div>
        </div-->
        
		<!-- info -->
        <div class="container" style="width: 80%; padding-top: 30px;">
            <div class="text-center">
                 <a href="<?=base_url() ?>article/CPCinfo"><h3 style="color: #428bca;"><strong>產品資訊</strong></h3></a>
                 <br>
                 <div class="row">
                     <div class="col-md-2" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCinfo_detail/209/167" class="thumbnail"><img src="<?=base_url() ?>/images/car-02.png"/></a>
                     </div>
                     <div class="col-md-2" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCinfo_detail/209/168" class="thumbnail"><img src="<?=base_url() ?>/images/industry-02.png"/></a>
                     </div>
                     <div class="col-md-2" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCinfo_detail/209/180" class="thumbnail"><img src="<?=base_url() ?>/images/boat-02.png"/></a>
                     </div>
                     <div class="col-md-2" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCinfo_detail/209/181" class="thumbnail"><img src="<?=base_url() ?>/images/gear-02.png"/></a>
                     </div>
                     <div class="col-md-2" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCinfo_detail/209/182" class="thumbnail"><img src="<?=base_url() ?>/images/diesel-02.png"/></a>
                     </div>
                 </div>
            </div>
        </div>
        <!-- info -->
        
        <!-- container -->
        <div class="container" style="width: 80%; padding-top: 100px;">
        	<div class="text-center">
            	<a href="<?=base_url() ?>article/CPCvideo"><h3 style="color: #428bca;"><strong>影音專區</strong></h3></a>
                <div class="row" style="padding-top: 30px;">
                	<?php 
					$move_list = $this->article_model_web->get_list_for_page_web('0', '2', 'sort', 'DESC', '1', '', '210');
					
			
						  $no = 0;
						  foreach ($move_list as $item): 
							 $no = $no + 1;
							 if ($no > 2) {
								 break;
							 }
					?>
                    <div class="col-md-6" style="padding-left: 20px; padding-right: 20px;">
                        <div class="video-container">
                        	<?=$item['content'] ?>
                        </div>
                    </div>
                        <?php endforeach ?>
                    </div>
                </div>      
            </div>
        </div>
        <!-- container -->
        
        <!-- info -->
        <div class="container" style="width: 80%; padding-top: 100px; padding-bottom: 100px;">
            <div class="text-center">
                 <h3 style="color: #428bca;"><strong>經銷通路</strong></h3>
                 <br>
                 <div class="row">
                     <div class="col-md-4" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCdealer/211/133" class="btn btn-primary">潤滑油脂經銷商</a>
                     </div>
                     <div class="col-md-4" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCdealer/211/134" class="btn btn-primary">外銷經銷商</a>
                     </div>
                     <div class="col-md-4" style="padding:20px;">
                     <a href="<?=base_url() ?>article/CPCdealer/211/135" class="btn btn-primary">大賣場專業經銷商</a>
                     </div>
                 </div>
            </div>
        </div>
        <!-- info -->
        
      
        <!-- CONTAINER -->
        <!--div class="container" style=" width:100%; height: 600px; background-image:url(<?=base_url() ?>/images/contact.jpg);background-size:cover;position:relative;" >
            <div class="col-sm-12" >
                <div class="text-center" style="margin-top:80px; margin-bottom: 150px;">
                    <a href="#" class="btn btn-primary">更多資訊</a>
                </div>
            </div>
        </div-->
        <!-- /.container -->
	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>