<?php include('common/header_view.php'); ?>

    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_name: "required",
                    txt_account: "required",
                    txt_password: "required",
                }
            });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/administrator">管理員資料</a>
        <span class="divider">/</span>
        新增資料
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">
                                層級</label>
                            <div class="controls">
                                <select name="sel_level" class="width-10">
                                    <option value="0"><?=get_level_text(0) ?></option>
                                    <option value="1"><?=get_level_text(1) ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">
                                <span class="require">*</span>名稱</label>
                            <div class="controls">
                                <input class="input-xlarge focused width-20" name="txt_name" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">
                                <span class="require">*</span>帳號</label>
                            <div class="controls">
                                <input class="input-xlarge focused width-20" name="txt_account" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">
                                <span class="require">*</span>密碼</label>
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