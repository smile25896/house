<?php include('common/header_view.php'); ?>

	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- HEADCONTENT -->
        <div class="headcontent">
            <div class="container">
                <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                    <h1>購物商店</h1>
                </div>
            </div>
        </div>
        <!-- /.headcontent -->
        <div class="container post format-standart">
            <div id="navbar" class="navbar-collapse collapse">	
                <ul class="nav navbar-nav">
					<p><i class="fas fa-home"></i>首頁
                    <i class="fas fa-angle-right"></i>
                    國光牌
                    <i class="fas fa-angle-right"></i>
                    購物商店
                    <i class="fas fa-angle-right"></i>
                    <?=$name ?></p>
				</ul>
            </div>
            <br>

			<!-- CONTAINER -->
			<div class="container type-product inforow">
				<div class="col-sm-5 text-center magnific-wrap" style="padding-left: 30px; padding-right: 30px;">
					<div class="img-medium slider oneslider">
						
						<ul>
							<?php
								$file_list = get_product_file_list($id, 2);
								
								foreach($file_list as $file_item) :
									if($file_item) :
							?>
								<li><a href="<?=base_url_upload_images().$file_item ?>" title="<?=$name ?>" class="magnific"><img src="<?=base_url_upload_images().$file_item ?>" alt="<?=$name ?>" style="width:50%;"></a></li>
							<?php
									endif;
								endforeach;
							?>
						</ul>
						<div class="product-nav">
							<a href="" class="product-prev arrow prev"><i></i></a>
							<div class="product-count"></div>
							<a href="" class="product-next arrow next"><i></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-7" style="padding-left: 30px; padding-right: 30px;">
					<h3><?=$name ?></h3>
					<?php if($price_special > 0) { ?>
                        <span class="price">
							<span class="amount" style="font-size:18px; text-decoration:line-through">原價$ <?=$price_original ?></span>
						</span>
						<span class="price">
							<span class="amount" style="color:#CC0000">特價$ <?=$price_special ?></span>
						</span>
					<?php } else { ?>
						<span class="price">
							<span class="amount" style="color:#CC0000">原價$ <?=$price_original ?></span>
						</span>
                    <?php } ?>
					<p><?=$summary ?></p>
					<hr/>
					<?php if($price_special > 0) { ?>
						<a href="#" class="btn btn-primary add-cart icon addcart" data-icon="k" pid="<?=$id ?>" stock="<?=$stock ?>" price="<?=$price_special ?>">購買</a>
						<a href="#" class="btn btn-primary add-cart icon addtrace" data-icon="k" pid="<?=$id ?>" mid="<?=($login_member) ? $login_member['id'] : 0; ?>">追蹤</a>
					<?php } else { ?>
						<a href="#" class="btn btn-primary add-cart icon addcart" data-icon="k" pid="<?=$id ?>" stock="<?=$stock ?>" price="<?=$price_original ?>">購買</a>
						<a href="#" class="btn btn-primary add-cart icon addtrace" data-icon="k" pid="<?=$id ?>" mid="<?=($login_member) ? $login_member['id'] : 0; ?>">追蹤</a>
                    <?php } ?>
				</div>
			</div>
			<!-- /.container -->

			<!-- CONTAINER -->
			<div class="container">
				<ul class="nav nav-tabs text-center">
					<li class="active"><a href="#details" data-toggle="tab">內容</a></li>
					<li><a href="#reviews" data-toggle="tab">留言</a></li>
				</ul>
				<div class="tab-content inforow">
					<div class="tab-pane fade in active" id="details">
						<div class="col-sm-1"></div>
						<div class="col-sm-10" style="padding-left: 30px; padding-right: 30px;">
							<p><?=$content ?></p>
						</div>
					</div>
					<div class="tab-pane fade" id="reviews">					
						<?php include('common/product_comment_view.php'); ?>					
					</div>
				</div>
			</div>
			<!-- /.container -->

			<!-- SLIDER -->
			<!--div class="container  product-slider text-center">
				<header class="page-header">
					<h3>熱門商品</h3>
				</header>
				<hr>
				<ul>
					<?php
						$product_list = get_product_list_by_group(2);
						
						foreach($product_list as $product_item) :
					?>
						<li class="product" style="width: 218px;">
							<div class="product-img"  width="250">
								<?php
									$file_list = get_product_file_list($product_item['id'], 1);
									
									foreach($file_list as $file_item) :
										if($file_item) :
								?>
									<a href="<?=base_url() ?>product/detail/<?=$product_item['id'] ?>">
										<img alt="<?=$product_item['name'] ?>" src="<?=base_url_upload_images().$file_item ?>" />
										
									</a>
								<?php
											break;
										endif;
									endforeach;
								?>
								<a href="<?=base_url() ?>product/detail/<?=$product_item['id'] ?>" class="btn btn-default " >點我看詳情</a>
							</div>
							<h6><a href="<?=base_url() ?>product/detail/<?=$product_item['id'] ?>"><?=$product_item['name'] ?></a></h6>
							
							
							<?php if($product_item['price_special'] > 0): ?>
								<span class="price">
									<ins>
										<span class="amount">$ <?=number_format($product_item['price_special']) ?></span>
									</ins>
								</span>
							<?php endif; ?>
							
						</li>
					<?php endforeach ?>
				</ul>
				<nav class="nav-pages"></nav>
			</div-->
			<!-- /.slider -->
		</div>
	</div>
	<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>