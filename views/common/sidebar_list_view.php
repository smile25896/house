<aside>
	<!-- .widget -->
	<div class="widget">
		<ul class="category-list flat">
			<li>
				<a href="#">潤滑油脂經銷商</a>
			</li>
			<li>
				<a href="#">外銷經銷商</a>
			</li>
            <li>
				<a href="#">大賣場專業經銷商</a>
			</li>
		</ul>
	</div>
	<!-- /.widget -->
	<!-- .widget -->
	<div class="widget">
		<h4>友站連結</h4>
		<ul>
			<?php
				$banner_list = get_banner_list_web(402, 'sort', 'ASC');

				foreach($banner_list as $banner_item) :
					if($banner_item['path']) :
						if($banner_item['link']) :
			?>
				<li><a href="<?=$banner_item['link'] ?>" target="_blank"><img src="<?=base_url_upload_images().$banner_item['path'] ?>" ?></a></li>
			<?php 		else: ?>
				<li><img src="<?=base_url_upload_images().$banner_item['path'] ?>" ?></li>
			<?php
						endif;
					endif;
				endforeach;
			?>
		</ul>
	</div>
	<!-- /.widget -->
</aside>