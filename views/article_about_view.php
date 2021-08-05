<?php include('common/header_view.php'); ?>

    <!-- WRAPPER -->
    <div class="wrapper">
    	
        <!-- HEADCONTENT -->
        <div class="headcontent">
            <div class="container">
                <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                    <h1>關於我們</h1>
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
                    關於我們
                    <i class="fas fa-angle-right"></i>
                    <?=$title ?></p>
                </ul>
            </div>
            <br>
            <div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
                <?php include('common/about_sidebar_view.php'); ?>
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
    <!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>