<?php include('common/header_view.php'); ?>

    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    password: "required"
                }
            });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/member">會員管理</a>
        <span class="divider">/</span>
        修改密碼
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">
                            電子郵件 </label>
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
                            <span class="require">*</span>新密碼</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-20" name="txt_password" type="text" />
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