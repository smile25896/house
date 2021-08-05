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
                            商品標題</label>
                        <div class="controls">
                            <?php
                                $product_item = get_product_item($product_id);
                                echo $product_item['name'];
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
                            連絡電話</label>
                        <div class="controls">
                            <?=$tel ?>
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
                            寄送地址</label>
                        <div class="controls">
                            <?=$address ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            購買數量</label>
                        <div class="controls">
                            <?=$quantity ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            備註</label>
                        <div class="controls">
                            <?=$comment ?>
                        </div>
                    </div>
                    <!--div class="control-group">
                        <label class="control-label">
                            回覆</label>
                        <div class="controls">
                            <?=$reply ?>
                        </div>
                    </div-->
                </fieldset>
            </div>
        </div>
    </div>
</div>