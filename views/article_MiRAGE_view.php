<?php include('common/header_view.php'); ?>


    <!-- WRAPPER -->
	<div class="wrapper border" style=" background-color:#fff;">
    	<!-- banner -->
        <div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(405);
               if($banner_item && $banner_item['path']) :
			?>
				   <img alt="<?=web_config('site_name') ?>" src="<?=base_url_upload_images().$banner_item['path'] ?>" style="width:100%;"/>
		
			<?php endif; ?>
        </div>
        <!-- banner -->
        
        <!--div class="container" style="width: 100%;  background-color:#e70012;">
        	<div class="col-md-2">
            </div>
        	<div class="col-md-7" style="padding:50px;">
                <h1 style=" color:#c1d74e;font-size: 30px;"><strong>美耐吉-車輛潤滑油的專業品牌</strong></h1>
                <h1 style=" color:#fff; font-size: 24px;"><strong>針對車輛保修市場所推出的優質專業品牌，以清楚的核心價值「年輕、活力」與年輕人敢秀敢衝的精神來代表品牌個性。</strong></h1>
            </div>
        </div-->
        
		<!-- info -->
        <div class="container" style="padding-top: 30px; width: 80%;">
        	<div class="text-center">
            	<a href="<?=base_url() ?>article/MiRAGEinfo"><h3 style="color: #f00;"><strong>產品資訊</strong></h3></a><br>
                <div class="row">
                   <div class="col-md-6" style="padding-left: 30px; padding-right: 30px;">
                   <a href="<?=base_url() ?>article/MiRAGEinfo_detail/213/138"><img src="<?=base_url() ?>/images/M01.jpg"></a>
                   </div>
                   <div class="col-md-6" style="padding-left: 30px; padding-right: 30px;">
                   <a href="<?=base_url() ?>article/MiRAGEinfo_detail/213/147"><img src="<?=base_url() ?>/images/M02.jpg"></a>
                   </div>
                </div>
        	</div>
        </div>
        <!-- info -->
        
        <br><br><br>
        
        <!-- 影音專區 -->
        <div class="container" style=" width: 80%;">
            <div class="text-center">
            	<a href="<?=base_url() ?>article/MiRAGEvideo"><h3 style="color: #f00;"><strong>影音專區</strong></h3></a>
                <div class="row" style="padding-top: 30px;">
                	<?php 
					$move_list = $this->article_model_web->get_list_for_page_web('0', '3', 'sort', 'DESC', '1', '', '214');
					
			
						  $no = 0;
						  foreach ($move_list as $item): 
							 $no = $no + 1;
							 if ($no > 3) {
								 break;
							 }
					?>
                    <div class="col-md-4" style="padding-left: 20px; padding-right: 20px;">
                        <div class="video-container">
                        	<?=$item['content'] ?>
                        </div>
                    </div>
                        <?php endforeach ?>
                    </div>
                </div>      
            </div>
        </div>
        <!-- 影音專區 -->
        
        <!-- 經銷通路 -->
        <div class="container" style=" width: 80%; padding-top: 100px; padding-bottom: 100px;">
            <div class="text-center">
                 <h3 style="color:#f00;"><strong>經銷通路</strong></h3>
                 <br>
                 <div class="row">
                     
                     <a href="<?=base_url() ?>article/MiRAGEdealer/215/139" class="btn btn-danger" style="margin: 10px;">機油經銷商聯絡資訊</a>
                     
                     <a href="<?=base_url() ?>article/MiRAGEdealer/215/140" class="btn btn-danger" style="margin: 10px;">汽車用油列名店家服務據點</a>
                     
                     <a href="<?=base_url() ?>article/MiRAGEscooter" class="btn btn-danger" style="margin: 10px;">APEX 機車用油專賣店</a>
                     
                     <a href="<?=base_url() ?>article/MiRAGEdealer/215/209" class="btn btn-danger" style="margin: 10px;">快保中心嘉義旗艦店</a>
                     
                 </div>
            </div>
        </div>
        <!-- 經銷通路 -->
        
        <!-- CONTAINER -->
        <!--div class="container" style=" width:100%; height: 600px; background-image:url(<?=base_url() ?>/images/contact.jpg);background-size:cover;position:relative;" >
            <div class="col-sm-12" >
                <div class="text-center" style="margin-top:80px; margin-bottom: 150px;">
                    <a href="#" class="btn btn-danger">更多資訊</a>
                </div>
            </div>
        </div-->
        <!-- /.container -->
        
	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>