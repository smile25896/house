<aside>

	<!-- widget -->
    <div class="widget">
        <h4>潤滑小學堂分類</h4>
        <ul class="category-list">
            <?php
				  $tag_list = get_article_tag_list_by_code_web(206);
				  
				  foreach ($tag_list as $tag_item) :
				  
			?>
			<li><a href="<?=base_url() ?>article/learning_tag/<?=$tag_item['id'] ?>"><?=$tag_item['name'] ?></a></li>
			<?php endforeach; ?>
        </ul>
    </div>
	<!-- /.widget -->
    <form class="search-area form-group search-form" method="get" action="<?=base_url() ?>article/learning">
        <div class="form-group">
        <input type="text" name="q" value="<?php if(isset($q)) echo $q; ?>" placeholder="尋找" />
        </div>
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
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