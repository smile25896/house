<?php include('common/header_view.php'); ?>


	<!-- WRAPPER -->
	<div class="wrapper border">
    	<!-- banner -->
        <div class="container" style="width: 100%;">
			<?php
              $banner_item = get_banner_item_by_code(412);
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
					<h1>影音專區</h1>
				</div>
			</div>
		</div>
        <br>
		<!-- /.headcontent -->
			<div class="container post format-standart">
				<div id="navbar" class="navbar-collapse collapse">	
                     <ul class="nav navbar-nav">
                        <p><i class="fas fa-home"></i>首頁
                        <i class="fas fa-angle-right"></i>
                        美耐吉
                        <i class="fas fa-angle-right"></i>
                        多媒體專區
                        <i class="fas fa-angle-right"></i>
                        影音專區</p>
                    </ul>
                </div>
                <br>
				<?
				$NONUM = "12";
				if ($code != "205" && $code != "210" && $code != "214") {
					$NONUM = "10";
				?>
                <?
				}
				?>
			
                <div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<?php include('common/MiRAGEvideo_sidebar_view.php'); ?>
                </div>
                <div class="col-sm-9">
					<?php foreach ($result as $item): ?>
					<?
                    if ($code == "205" || $code == "210" || $code == "214") {
                    ?>
                    <div class="col-sm-6" style="padding: 30px;">
                        <div class="video-container">
                        <?=$item['content'] ?>
                        </div>
                        <p><?=get_short_date($item['create_date']) ?>
						<br><?=$item['title'] ?></p>
                    </div>
                     
				
        				<?
						} elseif ($code == "200") {
                        ?>
                        
                        <div class="enrty" style="margin-bottom: 30px; width: 1200px;">
							<table>
								<tr>
									<td style="padding: 50px;">
									<?php
										  $file_list = get_article_file_list($item['id'], 1);
											   if(count($file_list) == 1):
											   foreach($file_list as $file_item) :
											   if($file_item) :
									?>
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
													  <img alt="<?=$item['title'] ?>" src="<?=base_url_upload_images().$file_item ?>" />
												 </li>
												 <?php
																		endif;
																	endforeach;
												 ?>
											 </ul>
												   <nav class="nav-pages"></nav>
														</div>
												<?php endif; ?></td>
									</td>
									<td>
										<header class="entry-header">
											<?
												if ($code == "205"||$code == "210"||$code == "214") {
											?>
											<?=$item['content'] ?><br>
											<?
												}
											?>
												<h3><a href="<?=base_url() ?>article/news_detail/<?=$code?>/<?=$item['id'] ?>"><?=$item['title'] ?></a></h3>
										   <div class="meta">
												<a href="" class="author"><i class="fa fa-user"></i><?=get_administrator_name($item['create_administrator']) ?></a>
												<small><i class="fa fa-calendar"></i><?=get_short_date($item['create_datetime']) ?></small>
												<a href=""><i class="fa fa-comment"></i>
													<?php
																$article_comment_count = get_article_comment_count_by_article_id_web($item['id']);
						
																if($article_comment_count)
																	echo $article_comment_count.'則留言';
																else
																	echo '無留言';
													?>
												</a>
											</div>
										</header>
										<div class="entry-content">
											<p><?=$item['summary'] ?></p>
											<a href="<?=base_url() ?>article/news_detail/<?=$code?>/<?=$item['id'] ?>" class="btn btn-primary">更多內容</a>
										</div>
									</td>
								</tr>
							</table>
						</div>
        
        
					<?
				} else {
                    ?><div class="enrty" style="margin-bottom: 60px;">
						<header class="entry-header">
							<?
							if ($code == "205"||$code == "210"||$code == "214") {
							?>
							<?=$item['content'] ?><br>
                            <?
							}
							?>
                            <h3><a href="<?=base_url() ?>article/news_detail/<?=$code?>/<?=$item['id'] ?>"><?=$item['title'] ?></a></h3>
							<div class="meta">
								<a href="" class="author"><i class="fa fa-user"></i><?=get_administrator_name($item['create_administrator']) ?></a>
								<small><i class="fa fa-calendar"></i><?=get_short_date($item['create_datetime']) ?></small>
								<a href=""><i class="fa fa-comment"></i>
									<?php
										$article_comment_count = get_article_comment_count_by_article_id_web($item['id']);

										if($article_comment_count)
											echo $article_comment_count.'則留言';
										else
											echo '無留言';
									?>
								</a>
							</div>
						</header>
						<div class="entry-content">
							<?php
								$file_list = get_article_file_list($item['id'], 1);

								if(count($file_list) == 1):
									foreach($file_list as $file_item) :
										if($file_item) :
							?>
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
												<img alt="<?=$item['title'] ?>" src="<?=base_url_upload_images().$file_item ?>" />
											</li>
										<?php
												endif;
											endforeach;
										?>
									</ul>
									<nav class="nav-pages"></nav>
								</div>
							<?php endif; ?>
							<p><?=$item['summary'] ?></p>
							<a href="<?=base_url() ?>article/news_detail/<?=$code?>/<?=$item['id'] ?>" class="btn btn-primary">更多內容</a>
						</div>
					</div><hr/><?
		}					?>
                    
					<?php endforeach ?>
				</div>
			</div>

			<hr/>


		<?php include('common/page_bar_view.php'); ?>
		<br>
	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>