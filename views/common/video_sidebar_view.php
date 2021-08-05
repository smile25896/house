<aside>
	
	<!-- .widget -->
	<div class="widget">
		<!--h4>友站連結</h4-->
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