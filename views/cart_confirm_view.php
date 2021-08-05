<?php include('common/header_view.php'); ?>
	<!-- WRAPPER -->
	<div class="wrapper border" style="background-color:#FFF;">
		
		<!-- HEADCONTENT -->
        <div class="headcontent">
            <div class="container">
                <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                    <h1>訂單確認</h1>
                </div>
            </div>
        </div>
        <!-- /.headcontent -->
		
		<script>
			$(function () {
				$("#my_form").validate({
					rules: {
						txt_receiver_name: "required",
						txt_receiver_tel: "required",
						txt_receiver_email: "required",
						sel_county: "required",
						txt_address: "required"
					}
				});
				
				$('.address_zone').ajaddress({ city: "<?=$login_member["city"] ?>", county: "<?=$login_member["county"] ?>" });
			});
			
			function tosubzero(){
				document.getElementById("tookbuy").style.display = "none"; 
			}
		</script>
		
		<!-- CONTAINER -->
		<div class="container cart">
			<div class="col-sm-12" style="padding: 30px;">
				<div class="table-responsive">
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
							</tr>
						</thead>
						<tbody>
							<?php foreach ($list as $item): ?>
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
									<td class="product-subtotal"><?=$item['amount'] ?> 件</td>
                                    <td class="product-subtotal"><? //$item['color'] ?><?=$item['size'] ?></td>
									<td class="product-subtotal"><?=$item['subtotal'] ?> 元</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<div class="coupon">
					<div class="col-sm-6 no-all-padding clearfix hidden">
						<table class="table cart-total">
							<tr>
								<th>數量</th>
								<td class="text-primary"><?=$allamount ?> 項</td>
							</tr>
							<tr>
								<th>運費</th>
								<td class="text-primary">$ <?=$fee ?></td>
							</tr>
							<tr>
								<th>總計</th>
								<td class="text-primary">$ <?=$alltotal ?></td>
							</tr>
						</table>
					</div>
				</div>

				<hr/>
			</div>
		</div>
		<!-- /.container -->
		
		<hr class="no-margin" />
		
		<!-- CONTAINER -->
		<div class="container inforow">			
			<div class="col-lg-12" style="padding: 30px;">
				<form id="my_form" method="post" action="<?=current_url() ?>">
                <input type="hidden" name="txt_create_member" value="<?=$login_member['id'] ?>"/>
					<div class="col-lg-3">
						<div class="form-group">
							<label>付款方式</label>						
							<select name="rdo_pay_type">
								<!--option value="0"><?=get_pay_type_text(0) ?></option-->
								<!--option value="1"><?=get_pay_type_text(1) ?></option-->
                                <option value="2">貨到付款</option>
							</select>
						</div>
						<p>備註：完成訂單後，將會有專員與您電話聯繫。</p>
					</div>
					
					<div class="col-lg-5" style="padding-left: 30px; padding-right: 30px;">
                        <div class="form-group">
							<label>電子郵件</label>
							<input type="text" name="txt_receiver_email" value="<?=$login_member['email'] ?>"/>
						</div>
                        <div class="form-group">
							<label>收件人</label>
							<input type="text" name="txt_receiver_name" value="<?=$login_member['name'] ?>"/>
						</div>
						<div class="form-group">
							<label>電話</label>
							<input type="text" name="txt_receiver_tel" value="<?=$login_member['tel'] ?>"/>
						</div>
						<div class="form-group">
							<label>手機</label>
							<input type="text" name="txt_receiver_mobile" value="<?=$login_member['mobile'] ?>"/>
						</div>
						<div class="form-group">
							<label>地址</label>
							<div class="address_zone">
								<div class="width-04 pull-left" style="margin: 16px 6px 0 0">
									<span class="zipcode"></span>
									<input type="hidden" name="hid_zipcode" class="zipcode"/>
								</div>
								<div class="width-12 pull-left" style="margin-right: 6px">
									<select class="city" name="sel_city">
										<option value="">請選擇</option>
									</select>
								</div>
								<div class="width-12 pull-left">
									<select class="county" name="sel_county">
										<option value="">請選擇</option>
									</select>
								</div>
							</div>
							<input type="text" name="txt_address" value="<?=$login_member['address'] ?>" style="margin-top: 10px"/>
						</div>
					</div>
				
					<div class="col-lg-4">				
						<div class="form-group">
							<label>備註</label>
							<textarea name="txt_description"></textarea>
						</div>
						<div class="form-group text-right">
							<a href="<?=base_url() ?>cart" class="btn btn-primary">上一頁</a>
							<button type="submit" class="btn btn-primary">送出資料</button>
						</div>				
					</div>
				</form>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>