<?php include('common/header_view.php'); ?>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/web_config/modify">網站設定</a>
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
                            網站名稱</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="txt_site_name" type="text" value="<?=web_config('site_name') ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            Meta 關鍵字</label>
                        <div class="controls">
                            <textarea class="autogrow text_area width-35" name="txt_meta_keyword"><?=web_config('meta_keyword') ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            Meta 描述</label>
                        <div class="controls">
                            <textarea class="autogrow text_area width-35" name="txt_meta_desc"><?=web_config('meta_desc') ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            列表筆數</label>
                        <div class="controls">
                            <select name="sel_count_per_page" class="width-06">
                                <option <?php if(web_config('count_per_page') == '10') echo "selected='selected'"; ?>>10</option>
                                <option <?php if(web_config('count_per_page') == '20') echo "selected='selected'"; ?>>20</option>
                                <option <?php if(web_config('count_per_page') == '30') echo "selected='selected'"; ?>>30</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            頁數範圍</label>
                        <div class="controls">
                            <select name="sel_page_range" class="width-06">
                                <option <?php if(web_config('page_range') == '5') echo "selected='selected'"; ?>>5</option>
                                <option <?php if(web_config('page_range') == '8') echo "selected='selected'"; ?>>8</option>
                                <option <?php if(web_config('page_range') == '10') echo "selected='selected'"; ?>>10</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            網站是否開啟</label>
                        <div class="controls">
                            <input data-no-uniform="true" type="checkbox" class="iphone-toggle" name="chk_web_enable" <?php if(web_config('web_enable')) echo "checked='checked'"; ?> />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            最高管理者 Email</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">
                                    <i class="icon-envelope"></i>
                                </span><input class="input-xlarge focused" name="txt_administrator_email" type="text" value="<?=web_config('administrator_email') ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">儲存</button>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include('common/footer_view.php'); ?>