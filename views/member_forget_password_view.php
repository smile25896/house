<?php include('common/header_view.php'); ?>
    
	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6">
					<h1>忘記密碼</h1>
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
			
			<script>
				$(function () {
					$("#my_form").validate({
						rules: {
							txt_email: "required email"
						}
					});
				});
			</script>
			
			<div class="col-lg-5 col-md-6 col-sm-8 col-sm-offset-1">
				<h2>忘記密碼</h2>
				<p>請填入您的登記信箱，我們將新密碼寄至您登記信箱。</p>
				<form id="my_form" class="login-form" method="post" action="<?=current_url() ?>">
					<div class="form-group">
						<label>電子郵件</label>
						<input type="text" name="txt_email"/>
					</div>
					<button type="submit" class="btn btn-primary">確定</button>
				</form>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>