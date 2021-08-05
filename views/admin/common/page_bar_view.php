<?php if($page <= $total_page) : ?>
    <div class="row-fluid">
        <div class="span12">
            <div class="dataTables_info"><?php echo (($total_count) ? $start : '0'); ?> ~ <?=$end ?> 筆，共 <?=$total_count ?> 筆資料</div>
        </div>
        <?php if($total_page > 1): ?>
        <div class="span12 center">
            <div class="dataTables_paginate paging_bootstrap pagination">
                <ul>
                    <?php if ($page > 1): ?>
                        <li class="prev"><a href="<?=base_url($this->uri->uri_string()).$query_string.'&p=1'; ?>"> |← </a></li>
                        <li class="prev"><a href="<?=base_url($this->uri->uri_string()).$query_string.'&p='.($page - 1); ?>"> ← </a></li>
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
                        <li class="next"><a href="<?=base_url($this->uri->uri_string()).$query_string.'&p='.($page + 1); ?>"> → </a></li>
                        <li class="next"><a href="<?=base_url($this->uri->uri_string()).$query_string.'&p='.$total_page; ?>"> →|</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
    </div>
<?php endif; ?>