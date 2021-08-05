<?php include('common/header_view.php'); ?>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/product_comment">商品留言</a>
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
                            留言</label>
                        <div class="controls">
                            <?=$comment ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            回覆</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_reply"><?=$reply ?></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">儲存</button>
                        <a class='btn' href='<?=base_url().$this->admin_library->get_return_url() ?>'>取消</a>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include('common/footer_view.php'); ?>