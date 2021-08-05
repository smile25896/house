<?php include('common/header_view.php'); ?>
    
	<!-- WRAPPER -->
	<div class="wrapper border">

		<!-- HEADCONTENT -->
		<div class="headcontent">
			<div class="container">
				<div class="col-sm-6">
					<h1>修改資料</h1>
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
					$('.birthday_zone').ajbirthday({ year: '<?=$birthday_year ?>', month: '<?=$birthday_month ?>', day: '<?=$birthday_day ?>'});
					$('.address_zone').ajaddress({ city: "<?=$city ?>", county: "<?=$county ?>" });
					$('.sex').val('<?=$sex ?>');
				});
			</script>
			
			<div class="col-lg-4 col-md-6 col-sm-8">
				<h2>修改資料</h2>
				<form id="my_form" class="login-form" method="post" action="<?=current_url() ?>">
					<div class="form-group">
						<label>電子郵件</label>
						<?=$email ?>
					</div>
					<div class="form-group">
						<label>姓名</label>
						<input type="text" name="txt_name" value="<?=$name ?>"/>
					</div>
					<div class="form-group">
						<label>電話</label>
						<input type="text" name="txt_tel" value="<?=$tel ?>"/>
					</div>
					<div class="form-group">
						<label>手機</label>
						<input type="text" name="txt_mobile" value="<?=$mobile ?>"/>
					</div>
					<div class="form-group">
						<label>性別</label>						
						<select class="sex" name="rdo_sex">
							<option value="男">男</option>
							<option value="女">女</option>
						</select>
					</div>
					<div class="form-group">
						<label>生日</label>
						<div class="birthday_zone">
							<div class="width-10 pull-left" style="margin-right: 6px">
								<select class="year" name="sel_birthday_year">
									<option value="">請選擇</option>
								</select>
							</div>
							<div class="width-10 pull-left" style="margin-right: 6px">
								<select class="month" name="sel_birthday_month">
									<option value="">請選擇</option>
								</select>
							</div>
							<div class="width-10 pull-left">
								<select class="day" name="sel_birthday_day">
									<option value="">請選擇</option>
								</select>
							</div>
						</div>
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
						<input type="text" name="txt_address" value="<?=$address ?>" style="margin-top: 10px"/>
					</div>
					<button type="submit" class="btn btn-primary">確定</button>
				</form>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>