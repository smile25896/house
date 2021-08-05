<!-- .widget -->
<div class="widget">
	<ul class="category-list flat">
		<?php if($login_member): ?>
			<li><a href="<?=base_url() ?>member/modify">修改資料</a></li>
			<li><a href="<?=base_url() ?>member/modify_password">修改密碼</a></li>
			<li><a href="<?=base_url() ?>order">訂單查詢</a></li>
			<li><a href="<?=base_url() ?>trace">追蹤商品</a></li>
		<?php else: ?>
			<li><a href="<?=base_url() ?>member">登入</a></li>
			<li><a href="<?=base_url() ?>member/signup">註冊</a></li>
			<li><a href="<?=base_url() ?>member/forget_password">忘記密碼</a></li>
		<?php endif; ?>
	</ul>
</div>
<!-- /.widget -->