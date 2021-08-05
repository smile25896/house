<?php include('common/header_view.php'); ?>
    
    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_title: "required"
                },
                submitHandler: function (form)
                {
                    //banner
                    var sel = $('#sel_banner');
                    var ids = sel.parent().find('.search-choice a').map(function() {
                        var index = $(this).prop('rel');
                        var opt = $('option', sel).get(index);       
                        return $(opt).val();
                    }).get().join();
                    
                    $("#hid_sel_banner").val(ids);
                    
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
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/article/<?=$code ?>">群組文章</a>
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
                            <span class="require">*</span>標題</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_title" type="text" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            摘要</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_summary"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            內容</label>
                        <div class="controls">
                            <textarea id="ckeditor1" name="txt_context"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            連結</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_link" type="text" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            圖片</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery" data='[]'>
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
                        <label class="control-label">圖片組</label>
                        <div class="controls">
                            <input type="hidden" id="hid_sel_banner" name="hid_sel_banner" />
                            <select id="sel_banner" name="sel_banner" multiple data-rel="chosen">
                                <?php
                                    $banner_list = get_banner_list($code);
                                    
                                    foreach ($banner_list as $banner_item) :
                                ?>
                                    <option value='<?=$banner_item['id'] ?>'><?=$banner_item['title'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">標籤</label>
                        <div class="controls">
                            <input type="hidden" id="hid_sel_tag" name="hid_sel_tag" />
                            <select id="sel_tag" name="sel_tag" multiple data-rel="chosen">
                                <?php
                                    $tag_list = get_article_tag_list_by_code($code);
                                    
                                    foreach ($tag_list as $tag_item) :
                                ?>
                                    <option value='<?=$tag_item['id'] ?>'><?=$tag_item['name'] ?></option>
                                <?php endforeach; ?>
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

<?php include('common/footer_view.php'); ?>