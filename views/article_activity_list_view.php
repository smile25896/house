<?php include('common/header_view.php'); ?>

	<!-- WRAPPER -->
	<div class="wrapper">
		<div class="container" style="background-color:#FFF;">
			<!-- HEADCONTENT -->
			<div id="navbar" class="navbar-collapse collapse">	
				<ul class="nav navbar-nav">
					<li><a href="<?=base_url() ?>">首頁</a></li>
					<li><a href="">> 活動錦輯</a></li>
				</ul>
			</div>
			<!-- /.headcontent -->
			
			<div class="container">
			
				<div class="col-sm-3">
					<?php include('common/sidebar_news_list_view.php'); ?>
				</div>
				<div class="col-sm-9">
					<div class="container isotope-list masonry-wrap margin-list no-padding-bottom">
						<ul>
							<?php foreach ($result as $item): ?>
								<li class="col-sm-3 msnr mix branding">
									<div class="fig">
										<?php
											$file_list = get_article_file_list($item['id'], 1);
											
											if(count($file_list) > 0):
										?>
											<img src="<?=base_url_upload_images().$file_list[0] ?>"/>
											<a class="mask magnific-gallery" data-gallery="<?=base_url_upload_images().$file_list[0] ?>">
												<h4><?=$item['title'] ?> <small><?=$item['summary'] ?></small></h4>
											</a>
										<?php endif; ?>
									</div>
								</li>
							<?php endforeach ?>
						</ul>
					</div>
					<!-- /.container -->
					
					<hr/>
			
					<?php include('common/page_bar_view.php'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>