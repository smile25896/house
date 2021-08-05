<?php if($page <= $total_page) : ?>
	
	<!-- PAGINATION -->
	<div class="container pagination-bar no-padding-top text-center">
		<ul class="pagination">
		
			<?php if ($page > 1): ?>				
				<li><a href="<?=base_url($this->uri->uri_string()).$query_string.'&p='.($page - 1); ?>" class="prev"></a></li>
			<?php endif; ?>
			
			<?php
				$page_range = web_config('page_range');
				$page_start = $page - $page_range;
				if($page_start <= 0)
					$page_start = 1;
				
				$page_end = $page + $page_range;
				if($page_end > $total_page)
					$page_end = $total_page;
				
				for($i = 1; $i <= $total_page; $i++){
					if($i >= $page_start && $i <= $page_end){
						if ($i == $page){
							echo "<li class='active'><a href='#'>{$i}</a></li>";
						} else {
							$href = base_url($this->uri->uri_string()).$query_string."&p={$i}";
							echo "<li><a href='{$href}'>{$i}</a></li>";
						}
					}
				}
			?>
			
			<?php if ($page < $total_page): ?>
				<li><a href="<?=base_url($this->uri->uri_string()).$query_string.'&p='.($page + 1); ?>" class="next"></a></li>
			<?php endif; ?>
			
			
		</ul>
	</div>
	<!-- /.pagination-bar -->
	
<?php endif; ?>