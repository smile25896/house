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
                            編號</label>
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
                            內容</label>
                        <div class="controls">
                            <?=$content ?>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>