<?php include('common/header_view.php'); ?>

	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6">
					<h1>訂單查詢</h1>
				</div>
			</div>
		</div>
		<!-- /.headcontent -->

		<!-- CONTAINER -->
		<div class="container inforow" style="padding-top: 30px;">
			<!-- Sidebar -->
			<aside class="col-md-3 col-sm-4 sidebar m-center">
				<?php include('common/member_sidebar_view.php'); ?>
			</aside>
			<!-- /.sidebar -->
			
			<div class="col-lg-9">
				<h2>訂單查詢</h2>
				<?php if($result): ?>
					<table class="table content-table">
						<thead>
							<tr class="bg-primary no-border">
								<th>訂單編號</th>
								<th>訂購日期</th>
								<th>金額</th>
								<th>付款方式</th>
								<th>出貨狀態</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $item): ?>
								<tr>
									<td><a href="<?=base_url() ?>order/detail/<?=$item['id'] ?>"><?=$item['no'] ?></a></td>
									<td><?=get_short_date($item['create_date']) ?></td>
									<td><?=$item['alltotal'] ?></td>
									<td><?=get_pay_type_text($item['pay_type']) ?></td>
									<td><?//=get_delivery_text($item['delivery'])
										if ($item['reduce_stock'] == "1") {
											echo "已出貨";
										} else {
											echo "未出貨";
										}
										 ?>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					
					<?php include('common/page_bar_view.php'); ?>
					
				<?php else: ?>
					無資料
				<?php endif; ?>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>