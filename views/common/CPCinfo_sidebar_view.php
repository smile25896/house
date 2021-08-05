<aside>

	<!-- widget -->
    <div class="widget">
        <h4>產品資訊</h4>
        <hr style="border-top: 1px solid #167ac6;">
        <ul class="category-list">
        	<li><a href="<?=base_url() ?>article/CPCinfo_detail/209/167"><b>車輛用油</b></a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/210">>汽車引擎機油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/211">>機車專用油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/212">>柴油引擎機油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/213">>自動變速系統及傳動用油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/214">>煞車油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/215">>水箱精</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/168"><b>工業用油</b></a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/216">>循環機油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/218">>工業用齒輪油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/219">>氣渦機油、透平機油、空壓機油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/220">>金屬加工用油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/221">>滑道機油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/222">>溶水油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/223">>放電加工用油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/224">>冷凍機油及變壓器油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/225">>橡膠軟化油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/226">>防銹油</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/227">>其他工業用油產品</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/180"><b>海運用油</b></a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/228">>十字頭型柴油引擎</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/229">>筒型活塞型柴油引擎</a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/181"><b>滑脂</b></a></li>
            <li><a href="<?=base_url() ?>article/CPCinfo_detail/209/182"><b>基礎油</b></a></li>
            <!--
            <?php
				  $tag_list = get_article_tag_list_by_code_web(209);
				  
				  foreach ($tag_list as $tag_item) :
			?>
			<li><a href="<?=base_url() ?>article/CPCproduct_tag/<?=$tag_item['id'] ?>"><?=$tag_item['name'] ?></a></li>
			<?php endforeach; ?>
            -->
        </ul>
    </div>
	<!-- /.widget -->
    <!--form class="search-area form-group search-form" method="get" action="<?=base_url() ?>article/CPCinfo">
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