<?php include('common/header_view.php'); ?>
   
	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6">
					<h1>會員註冊</h1>
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
							txt_email: "required email",
							txt_password: {
								required: true,
								rangelength: [6, 20]
							},
							txt_password2: {
								required: true,
								equalTo: "#password"
							}
						}
					});
				});
			</script>
			
			<div class="col-lg-4 col-md-6 col-sm-8">
				<h2>註冊</h2>
				<form id="my_form" class="login-form" method="post" action="<?=current_url() ?>">
                	<div class="form-group">
						<label>姓名</label>
						<input type="text" name="txt_name"/>
					</div>
					<div class="form-group">
						<label>電子郵件</label>
						<input type="text" name="txt_email"/>
					</div>
					<div class="form-group">
						<label>密碼</label>
						<input type="password" name="txt_password" id="password"/>
					</div>
					<div class="form-group">
						<label>確認密碼</label>
						<input type="password" name="txt_password2"/>
					</div>
					<button type="submit" class="btn btn-primary">確定</button>
				</form>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>