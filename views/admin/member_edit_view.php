<?php include('common/header_view.php'); ?>

    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_name: "required"
                }
            });

            $('.birthday_zone').ajbirthday({ year: '<?=$birthday_year ?>', month: '<?=$birthday_month ?>', day: '<?=$birthday_day ?>'});
            $('.address_zone').ajaddress({ city: "<?=$city ?>", county: "<?=$county ?>" });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/member">會員管理</a>
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
                            電子郵件 </label>
                        <div class="controls">
                            <?=$email ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <span class="require">*</span>姓名</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-20" name="txt_name" type="text" value="<?=$name ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            電話</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-12" name="txt_tel" type="text" value="<?=$tel ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            手機</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-12" name="txt_mobile" type="text" value="<?=$mobile ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            性別</label>
                        <div class="controls">
                            <label><input type="radio" name="rdo_sex" value="男"
                                <?php if ($sex == "男") echo "checked='checked'" ?>/>男</label> 
                            <label><input type="radio" name="rdo_sex" value="女"
                                <?php if ($sex == "女") echo "checked='checked'" ?>/>女</label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            生日</label>
                        <div class="controls">
                            <div class="birthday_zone">
                                <select class="year width-08" name="sel_birthday_year">
                                    <option value="">請選擇</option>
                                </select>
                                <select class="month width-08" name="sel_birthday_month">
                                    <option value="">請選擇</option>
                                </select>
                                <select class="day width-08" name="sel_birthday_day">
                                    <option value="">請選擇</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            地址</label>
                        <div class="controls">
                          <div class="address_zone">
                            <span class="zipcode"></span>
                            <input type="hidden" name="hid_zipcode" class="zipcode"/>
                            <select class="city width-10" name="sel_city">
                                <option value="">請選擇</option>
                            </select>
                            <select class="county width-10" name="sel_county">
                                <option value="">請選擇</option>
                            </select>
                          </div>
                          <input type="text" class="address width-30" name="txt_address" value="<?=$address ?>"/>
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