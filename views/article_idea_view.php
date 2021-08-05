<?php include('common/header_view.php'); ?>


    <!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
					<h1>品牌理念</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<div class="container">
        	<div id="navbar" class="navbar-collapse collapse">	
				<ul class="nav navbar-nav">
					<p><a href="<?=base_url() ?>">首頁</a>
                    <img src="<?=base_url() ?>/images/right_icon.png" style="width:15px; height:10px;"/>
					<a href="<?=base_url() ?>article/idea">品牌理念</a></p>
				</ul>
			</div>
			<!-- CONTAINER -->
			<div class="container no-padding max-410 inforow">
				
				<div class="col-sm-12">
					<?php
                    $article_item = get_article_item_web(100);
                    
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