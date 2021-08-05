<?php include('common/header_view.php'); ?>


	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
					<h1>潤滑油安全資料</h1>
				</div>
			</div>
		</div>
        <br>
		<!-- /.headcontent -->
			<div class="container post format-standart">
                <!--div id="navbar" class="navbar-collapse collapse">	
                    <ul class="nav navbar-nav">
                        <p><a href="<?=base_url() ?>"><i class="fas fa-home"></i>首頁</a>
                        <i class="fas fa-angle-right"></i>
                        服務與支援
                        <i class="fas fa-angle-right"></i>
                        <a href="<?=base_url() ?>article/Safety">潤滑油安全資料</a></p>
                    </ul>
                </div-->
            	<br>
				<?
				$NONUM = "12";
				if ($code != "205") {
					$NONUM = "10";
				?>
                <!--div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<//?php include('common/safety_sidebar_view.php'); ?>
				</div-->
                <?
				}
				?>
				<div class="col-sm-12" style="padding-left: 30px; padding-right: 30px;">
                	<!-- info -->
                    <div class="container logotypes sm-padding-top">
                         <div class="row">
                             <div class="col-md-2">
                             	<a href="<?=base_url() ?>article/safety_detail/208/179"><img src="<?=base_url() ?>/images/car-02.png"/></a>
                             </div>
                             <div class="col-md-2">
                             	<a href="<?=base_url() ?>article/safety_detail/208/178"><img src="<?=base_url() ?>/images/industry-02.png"/></a>
                             </div>
                             <div class="col-md-2">
                             	<a href="<?=base_url() ?>article/safety_detail/208/184"><img src="<?=base_url() ?>/images/boat-02.png"/></a>
                             </div>
                             <div class="col-md-2">
                             	<a href="<?=base_url() ?>article/safety_detail/208/185"><img src="<?=base_url() ?>/images/gear-02.png"/></a>
                             </div>
                             <div class="col-md-2">
                             	<a href="<?=base_url() ?>article/safety_detail/208/183"><img src="<?=base_url() ?>/images/diesel-02.png"/></a>
                             </div>
                         </div>
                    </div>
                    <!-- info -->
                
                	<!--
					<?php foreach ($result as $item): ?>
		
					<div class="enrty" style="margin-bottom: 60px;">
						<header class="entry-header">
							<?
							if ($code == "205") {
							?>
							<?=$item['content'] ?><br>
                            <?
							}
							?>
                            <h3><a href="<?=base_url() ?>article/safety_detail/208/<?=$item['id'] ?>"><?=$item['title'] ?></a></h3>
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
							<a href="<?=base_url() ?>article/safety_detail/208/<?=$item['id'] ?>" class="btn btn-primary">更多內容</a>
						</div>
					</div><hr/>
                    
					<?php endforeach ?>
                    -->
				</div>
			</div>

			<hr/>


		<//?php include('common/page_bar_view.php'); ?>

	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>