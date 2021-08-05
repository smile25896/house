<aside>

	<!-- widget -->
    <div class="widget">
        <h4>產品資訊</h4>
        <hr style="border-top: 1px solid #d9534f;;">
        <ul class="category-list">
        	<li><a href="<?=base_url() ?>article/MiRAGEinfo_detail/213/138">MiRAGE PRO</a></li>
            <li><a href="<?=base_url() ?>article/MiRAGEinfo_detail/213/147">MiRAGE APEX</a></li>
            <!--
			<?php
				  $tag_list = get_article_tag_list_by_code_web(213);
				  
				  foreach ($tag_list as $tag_item) :
			?>
			<li><a href="<?=base_url() ?>article/MiRAGEproduct_tag/<?=$tag_item['id'] ?>"><?=$tag_item['name'] ?></a></li>
			<?php endforeach; ?>
            -->
        </ul>
    </div>
	<!-- /.widget -->
    
        <!--form class="search-area form-group search-form" method="get" action="<?=base_url() ?>article/MiRAGEinfo">
            <div class="form-group">
            <input type="text" name="q" value="<?php if(isset($q)) echo $q; ?>" placeholder="尋找" />
            </div>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form-->
   
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