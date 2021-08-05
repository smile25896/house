<?php include('common/header_view.php'); ?>
    
    <script>        
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_name: "required",
                    txt_price_original: "required number",
                    txt_price_special: "required number"
                },
                submitHandler: function (form)
                {
                    //tag
                    var sel = $('#sel_tag');
                    var ids = sel.parent().find('.search-choice a').map(function() {
                        var index = $(this).prop('rel');
                        var opt = $('option', sel).get(index);       
                        return $(opt).val();
                    }).get().join();
                    
                    $("#hid_sel_tag").val(ids);
                    
                    form.submit();
                }
            });
            
            CKEDITOR.replace( 'ckeditor1',
            {
            	filebrowserBrowseUrl : base_url_plugin + '/ckfinder/ckfinder.html',
            	filebrowserImageBrowseUrl : base_url_plugin + '/ckfinder/ckfinder.html?type=images',
            	filebrowserFlashBrowseUrl : base_url_plugin + '/ckfinder/ckfinder.html?type=flash',
            	filebrowserUploadUrl : base_url_plugin + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            	filebrowserImageUploadUrl : base_url_plugin + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=images',
            	filebrowserFlashUploadUrl : base_url_plugin + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=flash'
            });
            
            $(".thumbnails-gallery").ajthumbnails();
            
            //category
            var category_a = '<?=$category_a ?>';
            var category_b = '<?=$category_b ?>';
            var category_c = '<?=$category_c ?>';
            var category_d = '<?=$category_d ?>';
            
            $.ajax({
                type: "POST",
                url: "<?=base_url_admin() ?>/product_category_relation/get_product_category_a_for_select",
                data: { sel: category_a },
                dataType: "html",
                success: function (response) {
                    $("select[name='sel_category_a']").html(response);
                    $("select[name='sel_category_a']").change();
                }
            });
            
            $("select[name='sel_category_a']").change(function () {
                var category_a = $("select[name='sel_category_a']").val();
                
                $.ajax({
                    type: "POST",
                    url: "<?=base_url_admin() ?>/product_category_relation/get_product_category_b_for_select",
                    data: { sel: category_b, category_a: category_a },
                    dataType: "html",
                    success: function (response) {
                        $("select[name='sel_category_b']").html(response);
                        $("select[name='sel_category_b']").change();
                    }
                });
            });
            
            $("select[name='sel_category_b']").change(function () {
                var category_a = $("select[name='sel_category_a']").val();
                var category_b = $("select[name='sel_category_b']").val();
                
                $.ajax({
                    type: "POST",
                    url: "<?=base_url_admin() ?>/product_category_relation/get_product_category_c_for_select",
                    data: { sel: category_c, category_a: category_a, category_b: category_b },
                    dataType: "html",
                    success: function (response) {
                        $("select[name='sel_category_c']").html(response);
                        $("select[name='sel_category_c']").change();
                    }
                });
            });
            
            $("select[name='sel_category_c']").change(function () {
                var category_a = $("select[name='sel_category_a']").val();
                var category_b = $("select[name='sel_category_b']").val();
                var category_c = $("select[name='sel_category_c']").val();
                
                $.ajax({
                    type: "POST",
                    url: "<?=base_url_admin() ?>/product_category_relation/get_product_category_d_for_select",
                    data: { sel: category_d, category_a: category_a, category_b: category_b, category_c: category_c },
                    dataType: "html",
                    success: function (response) {
                        $("select[name='sel_category_d']").html(response);
                    }
                });
            });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/product">商品管理</a>
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
                            分類一</label>
                        <div class="controls">
                            <select class="width-12" name="sel_category_a"></select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            分類二</label>
                        <div class="controls">
                            <select class="width-12" name="sel_category_b"></select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            分類三</label>
                        <div class="controls">
                            <select class="width-12" name="sel_category_c"></select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            分類四</label>
                        <div class="controls">
                            <select class="width-12" name="sel_category_d"></select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <span class="require">*</span>名稱</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_name" type="text" value="<?=$name ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            說明</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_summary"><?=$summary ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <span class="require">*</span>原價</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-05" name="txt_price_original" type="text" value="<?=$price_original ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <span class="require">*</span>特價</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-05" name="txt_price_special" type="text" value="<?=$price_special ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            庫存</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-05" name="txt_stock" type="text" value="<?=$stock ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            內容</label>
                        <div class="controls">
                            <textarea id="ckeditor1" name="txt_content"><?=$content ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            小圖</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery" data='<?=get_product_file_list_json($id, 1); ?>'>
                                <li class="thumbnails thumbnails-template hide">
                                    <div class="thumbnail-box thumbnail-box-add">
                                        <a class="btn-thumbnail-add" href="#"><span class="icon32 icon-black icon-add"></span></a>
                                    </div>
                                    <div class="thumbnail-box thumbnail-box-del thumbnail-box-thumbnail">
                                        <a class="btn-thumbnail-del" href="#"><span class="icon icon-darkgray icon-cross"></span></a>
                                        <a class="btn-thumbnail-big" href="#"><span class="icon icon-darkgray icon-zoomin"></span></a>
                                    </div>
                                    <input type="hidden" class="thumbnail-file" name="file_a[]"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            大圖</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery" data='<?=get_product_file_list_json($id, 2); ?>'>
                                <li class="thumbnails thumbnails-template hide">
                                    <div class="thumbnail-box thumbnail-box-add">
                                        <a class="btn-thumbnail-add" href="#"><span class="icon32 icon-black icon-add"></span></a>
                                    </div>
                                    <div class="thumbnail-box thumbnail-box-del thumbnail-box-thumbnail">
                                        <a class="btn-thumbnail-del" href="#"><span class="icon icon-darkgray icon-cross"></span></a>
                                        <a class="btn-thumbnail-big" href="#"><span class="icon icon-darkgray icon-zoomin"></span></a>
                                    </div>
                                    <input type="hidden" class="thumbnail-file" name="file_b[]"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">標籤</label>
                        <div class="controls">
                            <input type="hidden" id="hid_sel_tag" name="hid_sel_tag" />
                            <select id="sel_tag" name="sel_tag" multiple data-rel="chosen">
                                <?php
                                    $tag_list = get_product_tag_list_all();
                                    $product_tag_id_arr = get_product_tag_id_arr_by_product_id($id);
                                    
                                    foreach ($tag_list as $tag_item) :
                                        if(in_array($tag_item['id'], $product_tag_id_arr)) :
                                ?>
                                    <option value='<?=$tag_item['id'] ?>' selected><?=$tag_item['name'] ?></option>
                                <?php else : ?>
                                    <option value='<?=$tag_item['id'] ?>'><?=$tag_item['name'] ?></option>
                                <?php
                                        endif;
                                    endforeach;
                                ?>
                            </select>
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

<?php include ('common/footer_view.php'); ?>