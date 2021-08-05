<?php include('common/header_view.php'); ?>
    
    <script>
        $(function () {
            CKEDITOR.replace( 'ckeditor1',
            {
            	filebrowserBrowseUrl : base_url_plugin + '/ckfinder/ckfinder.html',
            	filebrowserImageBrowseUrl : base_url_plugin + '/ckfinder/ckfinder.html?type=images',
            	filebrowserFlashBrowseUrl : base_url_plugin + '/ckfinder/ckfinder.html?type=flash',
            	filebrowserUploadUrl : base_url_plugin + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            	filebrowserImageUploadUrl : base_url_plugin + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=images',
            	filebrowserFlashUploadUrl : base_url_plugin + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=flash'
            });
            
            $(".thumbnails-gallery").ajthumbnails();
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/article/modify/<?=$code ?>">單頁文章</a>
        <span class="divider">/</span>
        修改資料
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">
                            標題</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_title" type="text" value="<?=$title ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            摘要</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_summary"><?=$summary ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            內容</label>
                        <div class="controls">
                            <textarea id="ckeditor1" name="txt_context"><?=$content ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            連結</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_link" type="text" value="<?=$link ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            圖片</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery" data='<?=json_encode(get_article_file_list($id, 1)); ?>'>
                                <li class="thumbnails thumbnails-template hide">
                                    <div class="thumbnail-box thumbnail-box-add">
                                        <a class="btn-thumbnail-add" href="#"><span class="icon32 icon-black icon-add"></span></a>
                                    </div>
                                    <div class="thumbnail-box thumbnail-box-del thumbnail-box-thumbnail">
                                        <a class="btn-thumbnail-del" href="#"><span class="icon icon-darkgray icon-cross"></span></a>
                                        <a class="btn-thumbnail-big" href="#"><span class="icon icon-darkgray icon-zoomin"></span></a>
                                    </div>
                                    <input type="hidden" class="thumbnail-file" name="file_a[]"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">儲存</button>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include('common/footer_view.php'); ?>