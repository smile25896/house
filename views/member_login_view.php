<?php include('common/header_view.php'); ?>
    
	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6">
					<h1>會員登入</h1>
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
							}     
						},        
						submitHandler: function(form) {
							var captcha_code = $("#captcha_code").val();
							
							if(!captcha_code) {
								$("#captcha_error").show();
							} else {
								var url = "<?=base_url() ?>home/validate/" + captcha_code;
								$.get( url, function( data ) {
									if(data == "success"){
										$("#captcha_error").hide();
										form.submit();
									} else {
										$("#captcha_error").show();
									}
								});
							}     
						}         
					});           
				});               
			</script>
			
			<div class="col-lg-4 col-md-6 col-sm-8">
				<h2>登入</h2>
				<form id="my_form" class="login-form" method="post" action="<?=current_url() ?>">
					<div class="form-group">
						<label>電子郵件</label>
						<input type="text" name="txt_email"/>
					</div>
					<div class="form-group">
						<label>密碼</label>
						<input type="password" name="txt_password"/>
					</div>
					<div class="form-group">
						<label>輸入驗證碼</label>
						<input type="text" id="captcha_code"/>
					</div>					
					<div class="form-group">
						<img id="captcha_image" src="<?=base_url_plugin() ?>/captcha_code.php?r= + Math.random();"/>
						<a href="#" onclick="$('#captcha_image').attr('src','<?=base_url_plugin() ?>/captcha_code.php?r=' + Math.random());">驗證碼更新</a>
						<div id="captcha_error" class="error" style="display: none;">驗證碼錯誤</div>
					</div>
					<button type="submit" class="btn btn-primary">確定</button>
				</form>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>