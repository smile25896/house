<?php include('common/header_view.php'); ?>

    <!-- WRAPPER -->
    <div class="wrapper border">
		<!-- banner -->
        <div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(411);
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
					<h1>產品資訊</h1>
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
                    產品資訊
                    <i class="fas fa-angle-right"></i>
                    <?=$title ?></p>
                </ul>
            </div>
            <br>
        	<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
				<?php include('common/MiRAGEinfo_sidebar_view.php'); ?>
            </div>
        
			<div class="col-sm-9">
    			<div class="post format-standart">
    				<header class="entry-header">
                    	<?php
							  $file_list = get_article_file_list($id, 1);
								   if(count($file_list) == 1):
								   foreach($file_list as $file_item) :
								   if($file_item) :
						?>
						 <img alt="<?=$title ?>" src="<?=base_url_upload_images().$file_item ?>" width="100%" />
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
										  <img alt="<?=$title ?>" src="<?=base_url_upload_images().$file_item ?>" />
									 </li>
									 <?php
															endif;
														endforeach;
									 ?>
								 </ul>
								 <nav class="nav-pages"></nav>
							</div>
						 <?php endif; ?>
    					<h2><?=$title ?></h2>
    					<div class="meta">
    						<!--a href="" class="author"><i class="fa fa-user"></i><?=get_administrator_name($create_administrator) ?></a-->
    						<small><i class="fa fa-calendar"></i><?=get_short_date($create_date) ?></small>
                            
                            <a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer/sharer.php?u='+fbhtml_url);return false;" title="分享至Facebook" style="margin: 0px;">
                            <img src="https://img.icons8.com/color/48/000000/facebook.png" alt="Facebook" width="30" />
                            </a>
                            <a href="javascript: void(window.open(&apos;https://lineit.line.me/share/ui?url=&apos; .concat(encodeURIComponent(location.href)) ));" title="分享至LINE" style="margin: 0px;">
                            <img alt="分享給LINE好友 !" src="https://img.icons8.com/color/48/000000/line-me.png" width="30" />
                            </a>
                            <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com" title="Email分享" style="margin: 0px;">
                                <img src="https://img.icons8.com/color/48/000000/secured-letter.png" alt="Email" width="30" />
                            </a>
    						<!--a href=""><i class="fa fa-comment"></i>
                                </?php
                                    $article_comment_count = get_article_comment_count_by_article_id_web($id);

                                    if($article_comment_count)
                                        echo $article_comment_count.'則留言';
                                    else
                                        echo '無留言';
                                ?/>
                            </a-->
    					</div>
    				</header>
    				<div class="entry-content">
    					<?=$content ?>
    				</div>
    			</div>

    			<hr/>

    			<nav class="nav-single clearfix">
                    <?php $article_item_prev = get_article_item_prev_web($code, $id, $sort); ?>
                    <?php if($article_item_prev) : ?>
                        <div class="nav-previous text-left">
        					<a href="<?=base_url() ?>article/MiRAGEinfo_detail/213/<?=$article_item_prev['id'] ?>">
        						<small>上一則</small>
        						<span><?=$article_item_prev['title'] ?></span>
        					</a>
        				</div>
                    <?php endif; ?>

                    <?php $article_item_next = get_article_item_next_web($code, $id, $sort); ?>
                    <?php if($article_item_next) : ?>
                        <div class="nav-next text-right">
        					<a href="<?=base_url() ?>article/MiRAGEinfo_detail/213/<?=$article_item_next['id'] ?>">
        						<small>下一則</small>
        						<span><?=$article_item_next['title'] ?></span>
        					</a>
        				</div>
                    <?php endif; ?>
    			</nav>
               
    		</div>
            </div>
    	</div>
    	<!-- /.container -->
    </div>
    <!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>