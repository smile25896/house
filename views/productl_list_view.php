<?php include('common/header_view.php'); ?>

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-12 text-center">
					<ol class="breadcrumb">
						<?php
							if(isset($is_category)) {
								if($category_b) {
									echo "<h1>".get_product_category_name_web($category_b)."</h1>";
								} elseif($category_a) {
									echo "<h1>".get_product_category_name_web($category_a)."</h1>";
								} else {
									echo '全部商品';
								}
							} elseif(isset($is_tag)) {
								echo get_product_tag_name_web($tag);
							}
						?>
					</ol>
				</div>
			</div>
			<a data-toggle="collapse" href="#hc-collapse" class="hc-toggle collapsed"></a>
			<div id="hc-collapse" class="hc-panel panel-collapse collapse bg-warning">
							<div class="container">
					<div class="col-sm-5 text-center">
						<h3>Atmosphere in Kitchen</h3>
					</div>
					<div class="col-sm-6">
						<p>Ea nec enim accumsan, ut prima blandit mel, labores nonumes detraxit an sed. Omnis malis propriae an sed, eu mea erat utinam meliore, inciderint philosophia usu ne. Laudem labores eu sed, vix in omnis habemus omnesque.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<!-- SLIDER -->
		<div class="oneslider slider slider-ecommerce">
			<ul>
				<?php
                    $banner_list = get_banner_list_web(401, 'sort', 'ASC');
                    
                    foreach($banner_list as $banner_item) :
                        if($banner_item['path']) :
                ?>
					<li data-title="<?=$banner_item['title'] ?>" class="bg-sl-classic-1">
						<div class="container max-500 inforow">
							<div class="col-sm-5 col-xs-10 col-xs-offset-1 divtable">
								<div class="divcell">
									<h2><?=$banner_item['title'] ?></h2>
									<p><?=$banner_item['content'] ?></p>
								</div>
							</div>
						</div>
					</li>
				<?php
                        endif;
                    endforeach;
                ?>
			</ul>
			<nav class="nav-pages"></nav>
			<a href="#" class="arrow prev nav-rounded"><i></i><span></span></a>
			<a href="#" class="arrow next nav-rounded"><i></i><span></span></a>
		</div>
		<!-- /.slider -->
		
		<!-- SORTING -->
		<div class="container sorting">
			<div class="col-xs-6 grid-nav">
				<nav>
					<a href="<?=str_replace("product/categoryl", "product/category", current_url()) ?>" class="a-grid"></a>					
					<a href="<?=current_url() ?>" class="active a-list"></a>
				</nav>
			</div>
			<div class="col-md-3 col-xs-6 col-md-offset-3 text-right">
				<label class="sr-only" for="select-sorting">Sorting</label>
				<select id="select-sorting">
					<option value="1">Default sorting</option>
					<option value="2">Sort by popularity</option>
					<option value="3">Sort by average rating</option>
					<option value="4">Sort by newness</option>
					<option value="5">Sort by price</option>
				</select>
			</div>
		</div>
		<!-- /.sorting -->
		
		<!-- PRODUCTS -->
		<div class="container products inforow">
			
			<?php					
				for($i = $j = 0; $i < count($result); $i++):
			?>			
				<div class="product clearfix">
					<div class="col-sm-3">
						<?php
							$file_list = get_product_file_list($result[$i]['id'], 1);
							
							foreach($file_list as $file_item) :
								if($file_item) :
						?>
							<a href="<?=base_url() ?>product/detail/<?=$result[$i]['id'] ?>">
								<img alt="<?=$result[$i]['name'] ?>" src="<?=base_url_upload_images().$file_item ?>" />
								<?php
									switch(rand(0, 3)){
										case 1:
											echo '<div class="sticker sticker-primary">New</div>';
											break;
										case 2:
											echo '<div class="sticker sticker-default">Sale</div>';
											break;
										case 3:
											echo '<div class="sticker sticker-info">Top</div>';
											break;
									}
								?>
							</a>
						<?php
									break;
								endif;
							endforeach;
						?>
					</div>
					<div class="col-sm-9 cdescription">
							<h4><a href="<?=base_url() ?>product/detail/<?=$result[$i]['id'] ?>"><?=$result[$i]['name'] ?></a></h4>
							<span class="price">
								<span class="amount">$ <?=number_format($result[$i]['price_special']) ?></span>
							</span>
						<p><?=$result[$i]['summary'] ?></p>
						<a href="#" class="btn btn-primary add-cart icon addcart" data-icon="k" pid="<?=$result[$i]['id'] ?>" stock="<?=$result[$i]['stock'] ?>" price="<?=$result[$i]['price_special'] ?>">購買</a>
					</div>
				</div>
				<!-- /.product -->
			<?php						
					$j++;
					
					if(($j % 3 == 0) && $j < count($result))
						echo '<hr>';						
				endfor;
			?>
			
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
<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>