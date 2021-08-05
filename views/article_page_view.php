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
    <div><?=$title ?></div>
    <div><?=$summary ?></div>
    <div><?=$content ?></div>

<?php include('common/footer_view.php'); ?>