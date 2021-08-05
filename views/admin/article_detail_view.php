<link href="<?=base_url_css() ?>/admin/bootstrap-spacelab.min.css" rel="stylesheet"/>
<link href="<?=base_url_css() ?>/admin/admin.css" rel="stylesheet"/>

<div class="form-horizontal">
    <div class="modal-header">
        <h3>檢視資料</h3>
    </div>
    <div class="row-fluid detail-content">
        <div class="span12">
            <div class="box-content">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">
                            ID</label>
                        <div class="controls">
                            <?=$id ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            標題</label>
                        <div class="controls">
                            <?=$title ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            摘要</label>
                        <div class="controls">
                            <?=$summary ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            內容</label>
                        <div class="controls">
                            <?=$content ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            連結</label>
                        <div class="controls">
                            <?=$link ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            圖片</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery">
                                <?php
                                    $file_list = get_article_file_list($id, 1);
                                    
                                    foreach($file_list as $file_item) :
                                ?>
                                    <li class="thumbnails">
                                        <div class="thumbnail-box thumbnail-box-thumbnail" style="background-image: url('<?=base_url_upload_images().$file_item ?>'"> </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            圖片組</label>
                        <div class="controls">
                            <?php
                                $banner_list = get_article_banner_list_by_article_id($id);
                                
                                foreach($banner_list as $banner_item) :
                            ?>
                                <li class="thumbnails">
                                    <div class="thumbnail-box thumbnail-box-thumbnail" style="background-image: url('<?=base_url_upload_images().$banner_item['path'] ?>'"> </div>
                                </li>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            標籤</label>
                        <div class="controls">
                            <?=get_article_tag_name_by_article_id($id) ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            點擊數</label>
                        <div class="controls">
                            <?=$hits ?>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>