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
                            分類一</label>
                        <div class="controls">
                            <?=get_product_category_name($category_a) ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            分類二</label>
                        <div class="controls">
                            <?=get_product_category_name($category_b) ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            分類三</label>
                        <div class="controls">
                            <?=get_product_category_name($category_c) ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            分類四</label>
                        <div class="controls">
                            <?=get_product_category_name($category_d) ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            名稱</label>
                        <div class="controls">
                            <?=$name ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            說明</label>
                        <div class="controls">
                            <?=$summary ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            原價</label>
                        <div class="controls">
                            <?=$price_original ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            特價</label>
                        <div class="controls">
                            <?=$price_special ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            庫存</label>
                        <div class="controls">
                            <?=$stock ?>
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
                            小圖</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery">
                                <?php
                                    $file_list = get_product_file_list($id, 1);
                                    
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
                            大圖</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery">
                                <?php
                                    $file_list = get_product_file_list($id, 2);
                                    
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
                            標籤</label>
                        <div class="controls">
                            <?=get_product_tag_name_by_product_id($id) ?>
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