<?php include('common/header_view.php'); ?>


    <!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
					<h1>購買專區</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<div class="container post format-standart">
        	<div id="navbar" class="navbar-collapse collapse">	
				<ul class="nav navbar-nav">
					<p><a href="<?=base_url() ?>"><i class="fas fa-home"></i>首頁</a>
                    <i class="fas fa-angle-right"></i>
					<a href="">購買專區</a></p>
				</ul>
			</div>
			<!-- CONTAINER -->
			<div class="container">
				<div class="col-sm-12" style="padding-left: 30px; padding-right: 30px;">
					<?php
                    $article_item = get_article_item_web(109);
                    
                    if($article_item):
					?>
						<?=$article_item['content'] ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- /.container -->
            
            <!-- order -->
            <div class="col-sm-12">
                <ul class="nav nav-tabs text-center">
                    <li><a href="#reviews" data-toggle="tab">我要訂購</a></li>
                </ul>
                <div class="tab-content inforow">
                    <div class="tab-pane fade" id="reviews" style="padding-bottom: 100px;">					
                        <?php include('common/product_comment_view.php'); ?>					
                    </div>
                </div>
            </div>
            <!-- /.order -->
		</div>

	</div>
	<!-- /.wrapper -->
    
    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_name: "required",
                    txt_email: "required email"
                }
            });
        });
    </script>

<?php include('common/footer_view.php'); ?>