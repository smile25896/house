<?php include('common/header_view.php'); ?>
    
    <div>
        <?php
            $file_list = get_article_file_list($id, 1);
            
            foreach($file_list as $file_item) :
                if($file_item) :
        ?>
            <img alt="<?=$title ?>" src="<?=base_url_upload_images().$file_item ?>" />
        <?php
                endif;
            endforeach;
        ?>
    </div>
    <?php
        $banner_list = get_article_banner_list_by_article_id_web($id);
        
        foreach($banner_list as $banner_item) :
            if($banner_item['path']) :
    ?>
        <img alt="<?=$banner_item['title'] ?>" src="<?=base_url_upload_images().$banner_item['path'] ?>" />
    <?php
            endif;
        endforeach;
    ?>
    <div><?=$title ?></div>
    <div><?=$summary ?></div>
    <div><?=$content ?></div>
    <div><?=$link ?></div>
    <ul>
        <?php
            $list = get_article_tag_list_by_article_id_web($id);
            
            foreach($list as $item) :
        ?>
    	   <li><?=$item['name'] ?></li>
        <?php endforeach; ?>
    </ul>
    
    <?php include('common/article_comment_view.php'); ?>
    
    <?php $article_item_prev = get_article_item_prev_web($id); ?>
    <?php if($article_item_prev) : ?>
        <a href="<?=base_url() ?>article/detail/<?=$article_item_prev['id'] ?>">上一則</a>
    <?php endif; ?>
    
    <?php $article_item_next = get_article_item_next_web($id); ?>
    <?php if($article_item_next) : ?>
        <a href="<?=base_url() ?>article/detail/<?=$article_item_next['id'] ?>">下一則</a>
    <?php endif; ?>

<?php include('common/footer_view.php'); ?>