<?php include('common/header_view.php'); ?>
  
    
	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6">
					<h1>追蹤商品</h1>
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
				<h2>追蹤商品</h2>
				<?php if($result): ?>
					<table class="table content-table">
						<thead>
							<tr class="bg-primary no-border">
								<th>名稱</th>
								<th>原價</th>
								<th>特價</th>
								<th>加入購物車</th>
								<th>刪除</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($result as $item): ?>
								<tr>
									<td><?=$item['name'] ?></td>
									<td><?=$item['price_original'] ?> 元</td>
									<td><?=$item['price_special'] ?> 元</td>
									<td><a href="#" class="addcart" pid="<?=$item['id'] ?>" stock="<?=$item['stock'] ?>" price="<?=$item['price_special'] ?>">購買</a></td>
									<td><a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url() ?>/trace/del/<?=$item['id'] ?>'}">刪除</a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>					
				<?php else: ?>
					無資料
				<?php endif; ?>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>