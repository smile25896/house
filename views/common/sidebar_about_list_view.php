<aside>
	<!-- widget -->
    <div class="widget">
        <h4>服務據點</h4>
        <hr style="border-top: 1px solid #167ac6;">
        <ul class="category-list">
            <li><a href="<?=base_url() ?>article/units">潤滑油事業部</a></li>
            <li><a href="https://web.cpc.com.tw/division/mb/service-search.aspx" target="blank">中油公司自營加油站車輛快速保養中心查詢</a></li>
        </ul>
    </div>
	<!-- .widget -->
    
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