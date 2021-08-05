<?php include('common/header_view.php'); ?>
    
    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_email: "email",
                    txt_question: "required",
                }
            });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/faq">問與答</a>
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
                            姓名</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_name" type="text" value="<?=$name ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            電子郵件</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">
                                    <i class="icon-envelope"></i>
                                </span><input class="input-xlarge focused" name="txt_email" type="text" value="<?=$email ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <span class="require">*</span>問題</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_question"><?=$question ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            答案</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_answer"><?=$answer ?></textarea>
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