<?php include('common/header_view.php'); ?>


    <!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
					<h1>資訊安全政策</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<div class="container">
        	<div id="navbar" class="navbar-collapse collapse">	
                <ul class="nav navbar-nav">
					<p><i class="fas fa-home"></i>首頁
                    <i class="fas fa-angle-right"></i>
                    資訊安全政策</p>
                </ul>
            </div>
            <br>
			<!-- CONTAINER -->
			<div class="container no-padding max-410 inforow">
				<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<?php include('common/sidebar_news_list_view.php'); ?>
				</div>
				<div class="col-sm-9 hidden-middle m-padding" style="padding-left: 30px; padding-right: 30px;">
					<?php
                    $article_item = get_article_item_web(108);
                    
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