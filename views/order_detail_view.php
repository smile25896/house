<?php include('common/header_view.php'); ?>
    
	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6">
					<h1>訂單資料</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<!-- CONTAINER -->
		<div class="container inforow">
			<!-- Sidebar -->
			<aside class="col-md-3 col-sm-4 sidebar m-center" style="margin-top: 30px;">
				<?php include('common/member_sidebar_view.php'); ?>
			</aside>
			<!-- /.sidebar -->
			
			<div class="col-lg-9" style="margin-top: 30px;">
				<h2>訂單資料</h2>
				<hr/>
				<div class="form-group">
					<label>編號</label>
					<?=$no ?>
				</div>
				<div class="form-group">
					<label>日期</label>
					<?=get_short_date($create_date) ?>
				</div>
				<div class="form-group">
					<label>總金額</label>
					<?=$alltotal ?>
				</div>
				<div class="form-group">
					<label>付款方式</label>
					<?=get_pay_type_text($pay_type) ?>
				</div>
				<!--div class="form-group">
					<label>付款狀態</label>
					<?=get_pay_text($pay) ?>
				</div-->
				<br><br>
				<h2>商品明細</h2>
				<hr/>
				<table class="table content-table">
					<thead>
						<tr class="bg-primary no-border">
							<th>名稱</th>
							<th>原價</th>
							<th>特價</th>
							<th>數量</th>
							<th>小計</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($list as $item): ?>
							<tr>
								<td><?=$item["product_name"] ?></td>
								<td><?=$item["product_price_original"] ?></td>
								<td><?=$item["product_price_special"] ?></td>
								<td><?=$item["amount"] ?></td>
								<td><?=$item["subtotal"] ?></td>                                        
							</tr>
						<?php endforeach ?>
					</tbody>
					<tfoot>
						<tr>
							<td class="tright" colspan="4">共有 <?=count($list) ?> 項商品  合計金額 <?=$total ?> 元 運費 <?=$fee ?> 元 總計 <?=$alltotal ?> 元</td>
						</tr>
					</tfoot>
				</table>
				<br><br>
				<h2>寄送資料</h2>
				<hr/>
				<div class="form-group">
					<label>姓名</label>
					<?=$receiver_name ?>
				</div>
				<div class="form-group">
					<label>電話</label>
					<?=$receiver_tel ?>
				</div>
				<div class="form-group">
					<label>手機</label>
					<?=$receiver_mobile ?>
				</div>
				<div class="form-group">
					<label>地址</label>
					<?=$receiver_city.$receiver_county.$receiver_address ?>
				</div>
				<div class="form-group">
					<label>備註</label>
					<?=$description ?>
				</div>	
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>