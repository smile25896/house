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
                            帳號</label>
                        <div class="controls">
                            <?=$email ?>
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
                            電話</label>
                        <div class="controls">
                            <?=$tel ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            手機</label>
                        <div class="controls">
                            <?=$mobile ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            性別</label>
                        <div class="controls">
                            <?=$sex ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            生日</label>
                        <div class="controls">
                            <?=$birthday_year ?>/<?=$birthday_month ?>/<?=$birthday_day ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            地址</label>
                        <div class="controls">
                            <?=$city.$county.$address ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            註冊日期</label>
                        <div class="controls">
                            <?=$create_date ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            驗証日期</label>
                        <div class="controls">
                            <?=$auth_datetime ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            最後登入時間</label>
                        <div class="controls">
                            <?=$login_datetime ?>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>