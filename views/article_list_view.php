<?php include('common/header_view.php'); ?>
    
    <?php foreach ($result as $item): ?>
        <div>
            <?php
                $file_list = get_article_file_list($item['id'], 1);
                
                foreach($file_list as $file_item) :
                    if($file_item) :
            ?>
                <img alt="<?=$item['title'] ?>" src="<?=base_url_upload_images().$file_item ?>" />
            <?php
                    endif;
                endforeach;
            ?>
        </div>
        <div><a href="<?=base_url() ?>article/detail/<?=$item['id'] ?>"><?=$item['title'] ?></a></div>
        <div><?=get_short_date($item['create_date']) ?></div>
        <div><?=$item['summary'] ?></div>
    <?php endforeach ?>
    
    <?php include('common/page_bar_view.php'); ?>

<?php include('common/footer_view.php'); ?>