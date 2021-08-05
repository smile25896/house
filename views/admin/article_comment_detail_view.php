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
                            文章標題</label>
                        <div class="controls">
                            <?php
                                $article_item = get_article_item($article_id);
                                echo $article_item['title'];
                            ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            姓名</label>
                        <div class="controls">
                            <?=$name ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            電子郵件</label>
                        <div class="controls">
                            <?=$email ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            留言</label>
                        <div class="controls">
                            <?=$comment ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            回覆</label>
                        <div class="controls">
                            <?=$reply ?>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>