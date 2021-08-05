<?php
    $no_visible_elements = true;
    include('common/header_view.php');
?>

	<div class="row-fluid">
		<div class="span12 center login-header">
			<h2><?=web_config('site_name') ?> 管理後台</h2>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="well span5 center login-box">
			<div class="alert alert-info">
				請輸入帳號及密碼
			</div>
			<form class="form-horizontal" method="post" action="<?=current_url() ?>">
				<fieldset>
					<div class="input-prepend" title="帳號" data-rel="tooltip">
						<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="txt_admin_account" type="text" />
					</div>
					<div class="clearfix"></div>

					<div class="input-prepend" title="密碼" data-rel="tooltip">
						<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="txt_admin_password" type="password" />
					</div>
					<div class="clearfix"></div>
                    
                    <div class="input-prepend" data-rel="tooltip">
						<label class="error"><?php if(isset($error)) echo $error; ?></label>
					</div>
					<div class="clearfix"></div>
                    
					<p class="center span5">
					<button type="submit" class="btn btn-primary">登入</button>
					</p>
				</fieldset>
			</form>
		</div>
	</div>
            
<?php include('common/footer_view.php'); ?>