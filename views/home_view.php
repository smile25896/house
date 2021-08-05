<?php
    $is_home = true;
    include('common/header_view.php');
?>

    <!-- WRAPPER -->
	<div class="wrapper" style="background-color:#FFF;">
    	<!-- SLIDER -->
		<div class="slider oneslider">
			<ul data-speed-animation="1000">
				<?php
					$banner_list = get_banner_list_web(400, 'sort', 'ASC');
					
					foreach($banner_list as $banner_item) :
						if($banner_item['path']) :
				?>
					<li class="col-md-3">
						<a href="<?=$banner_item['link']?>" target="blank" style=" width:100%;"><img src="<?=base_url_upload_images().$banner_item['path'] ?>" /></a>
					</li>
				<?php
						endif;
					endforeach;
				?>
			</ul>
			<nav class="nav-pages"></nav>
			<a href="" class="arrow prev nav-rounded light"><i></i><span></span></a>
			<a href="" class="arrow next nav-rounded light"><i></i><span></span></a>
		</div>
		<!-- /.slider -->
		
		<!-- 影片banner -->
		<!-- div class="slider oneslider">
			<ul data-speed-animation="1000">
            <?php
					$banner_list = get_banner_list_web(400, 'sort', 'ASC');
					
					foreach($banner_list as $banner_item) :
						if($banner_item['path']) :
				?>
            	<li class=" overlay overlay-light" style="background-image:url(<?=base_url_upload_images().$banner_item['path'] ?>); background-size:cover;">
                    <div class="container">
                        <div class="col-sm-10 animate" data-animate="fadeInLeftBig" style="margin:100px">
                            <div class="embed-responsive embed-responsive-16by9">
                                <?=$banner_item['content'] ?>
                            </div>
                        </div>
                    </div>
    			</li>
                <?php
						endif;
					endforeach;
				?>
			</ul>
			<nav class="nav-pages"></nav>
			<a href="" class="arrow prev nav-rounded light"><i></i><span></span></a>
			<a href="" class="arrow next nav-rounded light"><i></i><span></span></a>
		</div-->
		<!-- 影片banner --> 
		
		<a id="scroll-anchor"></a>
            
        <br>
            
        <!-- 最新消息 -->
        <div class="container">
            <div class="text-center">
                 <h3><a href="<?=base_url() ?>article/news" style="color:black;">最新消息</a></h3>
            </div>
            
            <div class="row">
                <?php 
                $news = $this->article_model_web->get_list_for_page_web('0', '3', 'sort', 'DESC', '1', '', '200');
                
                      $no = 0;
                      foreach ($news as $item): 
                         $no = $no + 1;
                         if ($no > 3) {
                             break;
                         }
                         $file_list = get_article_file_list($item['id'], 1);
                                if(count($file_list) == 1):
                                foreach($file_list as $file_item) :
                                if($file_item) :
                ?>
                 <div class="col-md-4 text-center" style="padding-left: 30px; padding-right: 30px;">
                 <img alt="<?=$item['title'] ?>" src="<?=base_url_upload_images().$file_item ?>" width="100%" />
                     
                    <?php
                          endif;
                          endforeach;
                          elseif(count($file_list) > 1):
                    ?>
                    <div class="slider oneslider">
                        <ul>
                             <?php
                                    foreach($file_list as $file_item) :
                                        if($file_item) :
                             ?>
                             <li>
                                  <a href="<?=base_url() ?>article/news_detail/200/<?=$item['id'] ?>"><img alt="<?=$item['title'] ?>" src="<?=base_url_upload_images().$file_item ?>" /></a>
                             </li>
                             <?php
                                        endif;
                                    endforeach;
                             ?>
                         </ul>
                               <nav class="nav-pages"></nav>
                    </div>
                    <?php endif; ?>
                    <p><?=get_short_date($item['create_date']) ?><br>
                    <a href="<?=base_url() ?>article/news_detail/200/<?=$item['id'] ?>"><?=$item['title'] ?></a></p>
                    </div>
                <?php endforeach ?>
             </div>   
        </div>
        <!-- /.最新消息 -->
        
        <br><br><br>
        
        <!-- 產品與服務 -->
        <div class="text-center">
            <h3>產品與服務</h3>
        </div>
        <div class="container" style="text-align:center">
            <div class="row" style="padding-bottom: 50px;">
               <div class="col-md-6">
                   <div class="text-center">
                       <img src="<?=base_url() ?>/images/LOGO-right.jpg"style="width: auto;" />
                       <a class="mask" href="<?=base_url() ?>article/CPC" title="國光牌">
                          <h4>品牌專區</h4>
                       </a>
                   </div>
               </div>
               <div class="col-md-6">
                    <div class="text-center">
                       <img src="<?=base_url() ?>/images/LOGO-left.jpg" style="width: auto;" />
                       <a class="mask" href="<?=base_url() ?>article/MiRAGE" title="美耐吉">
                          <h4>品牌專區</h4>
                       </a>
                    </div>
               </div>
            </div>
         </div>
        <!-- 產品與服務 -->
        
        <br><br><br>
        
		<!-- 關於 -->
        <div class="container">
            <div class="text-center">
                 <h3>關於潤滑油事業部</h3>
            </div>
            <div class="row">
                <div class="col-md-3" style="margin-left: 50px;margin-right: 50px;">
                    <a href="<?=base_url() ?>article/about/201/200"><img src="<?=base_url() ?>/images/home_01.jpg"/></a>
                </div>   
                <div class="col-md-3" style="margin-left: 50px;margin-right: 50px;">
                    <a href="<?=base_url() ?>article/about/201/203"><img src="<?=base_url() ?>/images/home_02.jpg"/></a>
                </div>
                <div class="col-md-3" style="margin-left: 50px;margin-right: 50px;">
                    <a href="<?=base_url() ?>article/about/201/202"><img src="<?=base_url() ?>/images/home_033.jpg"/></a>
                </div>
            </div>   
        </div>
        <!-- 關於 -->
        <br><br><br>
        
        <!-- 影片專區 -->
        <!--div class="container">
            <div class="text-center">
                 <h2>影片專區 <span><a href="<?=base_url() ?>article/news_list/205" style="font-size:16pt;color:red;"> MORE</a></span></h2>
            </div>
            
            <div class="row">
                <?php 
                $move_list = $this->article_model_web->get_list_for_page_web('0', '2', 'sort', 'DESC', '1', '', '205');
                
        
                      $no = 0;
                      foreach ($move_list as $item): 
                         $no = $no + 1;
                         if ($no > 2) {
                             break;
                         }
                ?>
                <div class="col-md-6" style="padding-left: 30px; padding-right: 30px;">
                    <div class="video-container">
                    <?=$item['content'] ?>
                    </div>
                    <p><?=get_short_date($item['create_datetime']) ?>　<a href="<?=base_url() ?>article/news_detail/205/<?=$item['id'] ?>"><?=$item['title'] ?></a></p>
                </div>
                    <?php endforeach ?>
                </div>
            </div>      
        </div -->
        <!-- /.影片專區 -->
	</div>

<?php include('common/footer_view.php'); ?>