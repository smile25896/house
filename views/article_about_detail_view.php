<?php include('common/header_view.php'); ?>

    <!-- WRAPPER -->
    <div class="wrapper">
			<!-- HEADCONTENT -->
            <div class="headcontent">
                <div class="container">
                    <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                        <h1><?=$title ?></h1>
                    </div>
                </div>
            </div>
            <!-- /.headcontent -->
			
			<!-- CONTAINER -->
			<div class="container">
            	<div id="navbar" class="navbar-collapse collapse">	
                    <ul class="nav navbar-nav">
                        <p><a href="<?=base_url() ?>">首頁</a>
                        <img src="<?=base_url() ?>/images/right_icon.png" style="width:15px; height:10px;"/>
                        <?=$title ?></p>
                    </ul>
                </div>
                <br>
				<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
					<?php include('common/sidebar_list_view.php'); ?>
				</div>
				<div class="col-sm-9" style="padding-left: 30px; padding-right: 30px;">
					<div class="post format-standart">
						<div class="entry-content">
							<?=$content ?>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->
		 </div>
    </div>
    <!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>