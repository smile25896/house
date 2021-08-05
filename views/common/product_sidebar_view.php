<!-- widget -->

<div class="widget">

	<h4>商品分類</h4>

	<ul class="category-list">

		<?php

			$category_a_list = get_product_category_a_list_web();

			

			//category a

			foreach($category_a_list as $category_a_item) {

				$category_a_href = base_url()."product/category/{$category_a_item['category_a']}";

				$category_a_name = get_product_category_name($category_a_item['category_a']);

				$category_b_list = get_product_category_b_list_web($category_a_item['category_a']);

				$category_a_count = get_product_count_by_category_web($category_a_item['category_a']);

				

				if(count($category_b_list) > 0) {

					echo "<li><a href='{$category_a_href}'>{$category_a_name} <span class='pull-right'>{$category_a_count}</span></a><ul>";

		

					//category b

					foreach($category_b_list as $category_b_item) {

						$category_b_href = base_url()."product/category/{$category_a_item['category_a']}/{$category_b_item['category_b']}";

						$category_b_name = get_product_category_name($category_b_item['category_b']);

						$category_b_count = get_product_count_by_category_web($category_a_item['category_a'], $category_b_item['category_b']);

						

						echo "<li><a href='{$category_b_href}'>{$category_b_name} <span class='pull-right'>{$category_b_count}</span></a></li>";

					}

					

					echo "</ul>";

				} else {

					echo "<li><a href='{$category_a_href}'>{$category_a_name} <span class='pull-right'>{$category_a_count}</span></a></li>";

				}

			}

		?>

	</ul>

</div>

<!-- /.widget -->



<hr/>



<!-- widget -->

<div class="widget">

	<h4>商品標籤</h4>

	<ul class="category-list">

		<?php

			$tag_list = get_product_tag_list_all_web();

			

			foreach ($tag_list as $tag_item) :

				$product_count = get_product_count_by_tag_web($tag_item['id']);

		?>

			<li><a href="<?=base_url() ?>product/tag/<?=$tag_item['id'] ?>"><?=$tag_item['name'] ?> <span class='pull-right'><?=$product_count ?></span></a></li>

		<?php endforeach; ?>

	</ul>

</div>

<!-- /.widget -->



<hr/>



<!-- widget -->

<div class="widget">

	<h4>精選商品</h4>

	<ul class="cart-bar">

		<?php

			$product_list = get_product_list_by_group(2);

			

			foreach($product_list as $product_item) :

		?>

			<li>

				<a href="<?=base_url() ?>product/detail/<?=$product_item['id'] ?>" class="pict pull-left">

					<?php

						$file_list = get_product_file_list($product_item['id'], 1);

						

						foreach($file_list as $file_item) :

							if($file_item) :

					?>

						<img alt="<?=$product_item['name'] ?>" src="<?=base_url_upload_images().$file_item ?>" />

					<?php

								break;

							endif;

						endforeach;

					?>

				</a>

				<div class="block">

					<a href="<?=base_url() ?>product/detail/<?=$product_item['id'] ?>" style="font-size:16px"><?=$product_item['name'] ?></a>

					<span class="price">

						<span class="amount" style="font-size:16px">$ <?=number_format($product_item['price_special']) ?></span>

					</span>

				</div>

			</li>

		<?php endforeach ?>

	</ul>

</div>

<!-- /.widget -->