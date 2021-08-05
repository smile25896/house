<?php include('common/header_view.php'); ?>

	<!-- WRAPPER -->
	<div class="wrapper" >
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
                    </p>
				</ul>
            </div>
            <br>
			<!-- SORTING -->
			<!--div class="container sorting">
				<div class="col-xs-6 grid-nav">
					<nav>
						<a href="<?=current_url() ?>" class="active a-grid"></a>					
						<a href="<?=str_replace("product/category", "product/categoryl", current_url()) ?>" class="a-list"></a>
					</nav>
				</div>
				<div class="col-md-3 col-xs-6 col-md-offset-3 text-right">
					<form class="search-area form-group" method="get" action="<?=base_url() ?>product/search">
						<input type="text" name="q" value="<?php if(isset($q)) echo $q; ?>" placeholder="尋找商品" />
					</form>
				</div>
			</div-->
			<!-- /.sorting -->

			<!-- PRODUCTS -->
			<div class="container products">
				<!-- CATALOG BAR -->
				<!--div class="col-md-3 col-sm-4 col-xs-5  catalog-bar">
					<//?php include('common/product_sidebar_view.php'); ?>
				</div-->
				<!-- /.catalog-bar -->

				<!-- PRODUCT-LIST -->
				<div class="col-md-12 col-sm-8 col-xs-7 product-list">
					
					<?php					
						for($i = $j = 0; $i < count($result); $i++):
					?>				
						<div class="product" style="padding: 100px;">
							<div class="product-img">
								<?php
									$file_list = get_product_file_list($result[$i]['id'], 1);
									
									foreach($file_list as $file_item) :
										if($file_item) :
								?>
									<a href="<?=base_url() ?>product/detail/<?=$result[$i]['id'] ?>">
										<img alt="<?=$result[$i]['name'] ?>" src="<?=base_url_upload_images().$file_item ?>" />
										
									</a>
								<?php
											break;
										endif;
									endforeach;
								?>
								<a href="<?=base_url() ?>product/detail/<?=$result[$i]['id'] ?>" class="btn btn-primary" >點我看詳情</a>
							</div>
							<h6><a href="<?=base_url() ?>product/detail/<?=$result[$i]['id'] ?>"><?=$result[$i]['name'] ?></a></h6>
							<?php if(number_format($result[$i]['price_special']) > 0) {?>
							<span class="price">
                                <span class="amount" style="font-size:18px; text-decoration:line-through">原價$ <?=number_format($result[$i]['price_original']) ?></span><br>
								<span class="amount" style="color:#CC0000">特價$ <?=number_format($result[$i]['price_special']) ?></span>
							</span>
							<?php } else { ?>
                            <span class="price">
								<span class="amount" style="color:#CC0000">原價$ <?=number_format($result[$i]['price_original']) ?></span>
							</span>
							<?php } ?>
						</div>				
					<?php						
							$j++;
							
							if(($j % 3 == 0) && $j < count($result))
								echo '<hr>';						
						endfor;
					?>
				</div>
				<!-- /.product-list -->
			</div>
			<!-- /.products -->

			<hr/>
			
			<?php include('common/page_bar_view.php'); ?>
			
			<!-- DISPLAYING -->
			<div class="bg-primary displaying">
				<div class="container inforow">
					<div class="col-sm-7">
						<p><?php echo (($total_count) ? $start : '0'); ?> ~ <?=$end ?> 件 (<ins><?=$total_count ?></ins> 件商品)</p>
					</div>
				</div>
			</div>
			<!-- /.displaying -->
		</div>
		
		
	</div>
<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>