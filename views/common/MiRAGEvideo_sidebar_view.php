<aside>
	<!-- widget -->
    <div class="widget">
        <h4>多媒體專區</h4>
        <hr style="border-top: 1px solid #d9534f;;">
        <ul class="category-list">
            <li><a href="<?=base_url() ?>article/MiRAGEvideo">影音專區</a></li>
            <li><a href="<?=base_url() ?>article/MiRAGEposter">文宣品下載</a></li>
        </ul>
    </div>
    <!-- /.widget -->
	<!-- .widget -->
	<div class="hide-in-phone">
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
	</div>
	<!-- /.widget -->
</aside>