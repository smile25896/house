<?php include('common/header_view.php'); ?>
    
    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_email: "required"
                }
            });
        });
        
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/epaper_email">發送名單</a>
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
                            <span class="require">*</span>電子郵件</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">
                                    <i class="icon-envelope"></i>
                                </span><input class="input-xlarge focused" name="txt_email" type="text" />
                            </div>
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