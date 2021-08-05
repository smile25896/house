<?php include('common/header_view.php'); ?>

<!-- WRAPPER -->
<div class="wrapper">
	<div class="container" style="background-color:#FFF;">
		<!-- HEADCONTENT -->
		<div id="navbar" class="navbar-collapse collapse">	
			<div class="col-sm-2"></div>
			<ul class="nav navbar-nav">
				<li><a href="<?=base_url() ?>">首頁</a></li>
				<li><a href="">> FAQ</a></li>
			</ul>
		</div>
		<!-- /.headcontent -->
		
		<div class="container" >
			<?=$content ?>
		</div>
	</div>	
</div>
<!-- /.wrapper -->

<?php include('common/footer_view.php'); ?>