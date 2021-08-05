<aside>
	<form class="search-area form-group search-form" method="get" action="<?=base_url() ?>article/technology">
        <div class="form-group">
        <input type="text" name="q" value="<?php if(isset($q)) echo $q; ?>" placeholder="尋找" />
        </div>
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
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