<?php include('common/header_view.php'); ?>
    
	<!-- WRAPPER -->
	<div class="wrapper border">
		
		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-12 text-center">
					<h1>購物車</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<?php if($list) : ?>
			<!-- CONTAINER -->
			<div class="container cart">
				<div class="col-sm-12" style="padding:30px;">
					<div class="table-responsive" style="overflow-x: visible;">
						<table class="table text-center">
							<thead>
								<tr>
									<th></th>
									<th class="text-left">名稱</th>
									<th class="width-16 text-center">原價</th>
									<th class="width-16 text-center">特價</th>
									<th class="width-14 text-center">數量</th>
                                    <th class="width-14 text-center">貨號/顏色/尺寸</th>
									<th class="width-16 text-center">小計</th>
									<th class="width-12 text-center"></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($list as $item) : ?>
									<tr>
										<td class="product-thumbnail text-left">
											<?php
												$file_list = get_product_file_list($item['id'], 1);
												
												foreach($file_list as $file_item) :
													if($file_item) :
											?>
												<a href="<?=base_url() ?>product/detail/<?=$item['id'] ?>" target="_blank"><img alt="<?=$item['name'] ?>" src="<?=base_url_upload_images().$file_item ?>" class="width-10"/></a>											
											<?php
														break;
													endif;
												endforeach;
											?>
										</td>
										<td class="product-name text-left">
											<a href="<?=base_url() ?>product/detail/<?=$item['id'] ?>" target="_blank"><?=$item['name'] ?></a>
										</td>
										<td class="product-subtotal"><?=$item['price_original'] ?> 元</td>
										<td class="product-subtotal"><?=$item['price_special'] ?> 元</td>
										<td>
											<select class="amount" pid='<?=$item['id'] ?>' price='<?=$item['price_special'] ?>'>
												<?php
													$limit = ($item['stock'] > 10) ? 10 : $item['stock'];
													
													for($i = 0; $i <= $limit; $i++) {
														if($item['amount'] == $i)
															echo "<option value='{$i}' selected='selected'>{$i}</option>";
														else
															echo "<option value='{$i}'>{$i}</option>";
													}
												?>
											</select>
										</td>
                                        <td><?=$item['size'] ?>
                                        <?
										$prolist = get_product_item($item['id']);
										//echo $prolist['color_1'];
										//echo $item['size'];
										?>
											<?php /*if($prolist['color_1'] || $prolist['color_2'] || $prolist['color_3'] || $prolist['color_4'] || $prolist['color_5'] || $prolist['color_6'] || $prolist['color_7'] || $prolist['color_8']): ?>
												<select class="sel_size" disabled>
													<option value="">請選擇</option>
													<?php if($prolist['color_1']): ?>
														<option value="<?=$prolist['color_1'] ?>" <?php if($item['size'] == $prolist['color_1']) echo 'selected'; ?> ><?=$prolist['color_1'] ?></option>
													<?php endif; ?>
													<?php if($prolist['color_2']): ?>
														<option value="<?=$prolist['color_2'] ?>" <?php if($item['size'] == $prolist['color_2']) echo 'selected'; ?> ><?=$prolist['color_2'] ?></option>
													<?php endif; ?>
													<?php if($prolist['color_3']): ?>
														<option value="<?=$prolist['color_3'] ?>" <?php if($item['size'] == $prolist['color_3']) echo 'selected'; ?> ><?=$prolist['color_3'] ?></option>
													<?php endif; ?>
													<?php if($prolist['color_4']): ?>
														<option value="<?=$prolist['color_4'] ?>" <?php if($item['size'] == $prolist['color_4']) echo 'selected'; ?> ><?=$prolist['color_4'] ?></option>
													<?php endif; ?>
													<?php if($prolist['color_5']): ?>
														<option value="<?=$prolist['color_5'] ?>" <?php if($item['size'] == $prolist['color_5']) echo 'selected'; ?> ><?=$prolist['color_5'] ?></option>
													<?php endif; ?>
													<?php if($prolist['color_6']): ?>
														<option value="<?=$prolist['color_6'] ?>" <?php if($item['color'] == $prolist['color_6']) echo 'selected'; ?> ><?=$prolist['color_6'] ?></option>
													<?php endif; ?>
													<?php if($prolist['color_7']): ?>
														<option value="<?=$prolist['color_7'] ?>" <?php if($item['color'] == $prolist['color_7']) echo 'selected'; ?> ><?=$prolist['color_7'] ?></option>
													<?php endif; ?>
													<?php if($prolist['color_8']): ?>
														<option value="<?=$prolist['color_8'] ?>" <?php if($item['color'] == $prolist['color_8']) echo 'selected'; ?> ><?=$prolist['color_8'] ?></option>
													<?php endif; ?>
												</select>
											<?php endif; */?>
										
											<?php /*if($item['size_1'] || $item['size_2'] || $item['size_3'] || $item['size_4'] || $item['size_5'] || $item['size_6'] || $item['size_7'] || $item['size_8']): ?>
												<select class="sel_size" disabled>
													<option value="">請選擇</option>
													<?php if($item['size_1']): ?>
														<option value="<?=$item['size_1'] ?>" <?php if($item['size'] == $item['size_1']) echo 'selected'; ?> ><?=$item['size_1'] ?></option>
													<?php endif; ?>
													<?php if($item['size_2']): ?>
														<option value="<?=$item['size_2'] ?>" <?php if($item['size'] == $item['size_2']) echo 'selected'; ?> ><?=$item['size_2'] ?></option>
													<?php endif; ?>
													<?php if($item['size_3']): ?>
														<option value="<?=$item['size_3'] ?>" <?php if($item['size'] == $item['size_3']) echo 'selected'; ?> ><?=$item['size_3'] ?></option>
													<?php endif; ?>
													<?php if($item['size_4']): ?>
														<option value="<?=$item['size_4'] ?>" <?php if($item['size'] == $item['size_4']) echo 'selected'; ?> ><?=$item['size_4'] ?></option>
													<?php endif; ?>
													<?php if($item['size_5']): ?>
														<option value="<?=$item['size_5'] ?>" <?php if($item['size'] == $item['size_5']) echo 'selected'; ?> ><?=$item['size_5'] ?></option>
													<?php endif; ?>
													<?php if($item['size_6']): ?>
														<option value="<?=$item['size_6'] ?>" <?php if($item['size'] == $item['size_6']) echo 'selected'; ?> ><?=$item['size_6'] ?></option>
													<?php endif; ?>
													<?php if($item['size_7']): ?>
														<option value="<?=$item['size_7'] ?>" <?php if($item['size'] == $item['size_7']) echo 'selected'; ?> ><?=$item['size_7'] ?></option>
													<?php endif; ?>
													<?php if($item['size_8']): ?>
														<option value="<?=$item['size_8'] ?>" <?php if($item['size'] == $item['size_8']) echo 'selected'; ?> ><?=$item['size_8'] ?></option>
													<?php endif; ?>
												</select>
											<?php endif;*/ ?>
										</td>
										<td class="product-subtotal"><span class="subtotal">0</span> 元</td>
										<td class="product-remove text-center">
											<a href="#" class="delcart" pid='<?=$item['id'] ?>'><img src="<?=base_url_images() ?>/close.png" alt=""></a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /.container -->

			<!-- CONTAINER -->
			<div class="container inforow">
				<div class="col-sm-6 col-lg-offset-6">
					<table class="table cart-total">
						<tr>
							<th>數量</th>
							<td class="text-primary"><span class="allamount">0</span> 項</td>
						</tr>
						<tr>
							<th>總計</th>
							<td class="text-primary">$ <span class="total">0</span></td>
						</tr>
					</table>
				</div>
			</div>
			<!-- /.container -->

			<hr class="no-margin" />

			<!-- CONTAINER -->
			<div class="container text-center" style="padding:30px;">
				<a href="<?=base_url() ?>cart/confirm" class="btn btn-primary btn-lg btn-extra">進入結帳</a>
			</div>
			<!-- /.container -->			
		<?php else: ?>
			<!-- CONTAINER -->
			<div class="container lg-padding text-center">
				<h4 class="text-muted">購物車是空的</h4>
			</div>
			<!-- /.container -->
		<?php endif; ?>
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>