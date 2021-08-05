<?php include('common/header_view.php'); ?>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        公佈欄
    </ul>
    
    <?php
        $result = get_article_list_web(290);
        
        foreach ($result as $item):
    ?>
        <div class="row-fluid">
        	<div class="box span12">
                <div class="box-header well" data-original-title>
					<h2><i class="icon-edit"></i> <?=$item['title'] ?></h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
					</div>
				</div>
        		<div class="box-content">
        			<?=$item['content'] ?>
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
        	</div>
        </div>
    <?php endforeach ?>
    
<?php include('common/footer_view.php'); ?>