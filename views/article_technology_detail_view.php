<?php include('common/header_view.php'); ?>

    <!-- WRAPPER -->
    <div class="wrapper border">

    	<div class="gap"></div>

    	<!-- CONTAINER -->
    	<div class="container">
        	<div id="navbar" class="navbar-collapse collapse">	
                <ul class="nav navbar-nav">
                    <p><a href="<?=base_url() ?>">首頁</a>
                    <img src="<?=base_url() ?>/images/right_icon.png" style="width:15px; height:10px;"/>
                    <a href="<?=base_url() ?>article/technology">服務與支援</a>
                    <img src="<?=base_url() ?>/images/right_icon.png" style="width:15px; height:10px;"/>
                    <?=$title ?></p>
                </ul>
            </div>
            <br>
        	<div class="col-sm-3" style="padding-left: 30px; padding-right: 30px;">
				<?php include('common/article_news_sidebar_view.php'); ?>
            </div>
        
			<div class="col-sm-9" style="padding-left: 30px; padding-right: 30px;">
    			<div class="post format-standart">
    				<header class="entry-header">
    					<h2><?=$title ?></h2>
                        <img alt="<?=$item['title'] ?>" src="<?=base_url_upload_images().$file_item ?>" width="100%" />
    					<div class="meta">
    						<a href="" class="author"><i class="fa fa-user"></i><?=get_administrator_name($create_administrator) ?></a>
    						<small><i class="fa fa-calendar"></i><?=get_short_date($create_datetime) ?></small>
    						<!--a href=""><i class="fa fa-comment"></i>
                                <?php
                                    $article_comment_count = get_article_comment_count_by_article_id_web($id);

                                    if($article_comment_count)
                                        echo $article_comment_count.'則留言';
                                    else
                                        echo '無留言';
                                ?>
                            </a-->
    					</div>
    				</header>
    				<div class="entry-content">
    					<?=$content ?>
    				</div>
    			</div>

    			<hr/>

    			<nav class="nav-single clearfix">
                    <?php $article_item_prev = get_article_item_prev_web($code, $id); ?>
                    <?php if($article_item_prev) : ?>
                        <div class="nav-previous text-left">
        					<a href="<?=base_url() ?>article/technology_detail/202/<?=$article_item_prev['id'] ?>">
        						<small>上一則</small>
        						<span><?=$article_item_prev['title'] ?></span>
        					</a>
        				</div>
                    <?php endif; ?>

                    <?php $article_item_next = get_article_item_next_web($code, $id); ?>
                    <?php if($article_item_next) : ?>
                        <div class="nav-next text-right">
        					<a href="<?=base_url() ?>article/technology_detail/202/<?=$article_item_next['id'] ?>">
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