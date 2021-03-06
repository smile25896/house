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
        <a href="<?=base_url_admin() ?>/home">??????</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/article/<?=$code ?>">????????????</a>
        <span class="divider">/</span>
        ????????????
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">
                            <span class="require">*</span>??????</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_title" type="text" value="<?=$title ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            ??????</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_summary"><?=$summary ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            ??????</label>
                        <div class="controls">
                            <textarea id="ckeditor1" name="txt_context"><?=$content ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            ??????</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-30" name="txt_link" type="text" value="<?=$link ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            ??????</label>
                        <div class="controls">
                            <ul class="thumbnails-gallery" data='<?=json_encode(get_article_file_list($id, 1)); ?>'>
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
                        <label class="control-label">?????????</label>
                        <div class="controls">
                            <input type="hidden" id="hid_sel_banner" name="hid_sel_banner" />
                            <select id="sel_banner" name="sel_banner" multiple data-rel="chosen">
                                <?php
                                    $banner_list = get_banner_list($code);
                                    $banner_id_arr = get_article_banner_id_arr_by_article_id($id);
                                    
                                    foreach ($banner_list as $banner_item) :
                                        if(in_array($banner_item['id'], $banner_id_arr)) :
                                ?>
                                    <option value='<?=$banner_item['id'] ?>' selected><?=$banner_item['title'] ?></option>
                                <?php else : ?>
                                    <option value='<?=$banner_item['id'] ?>'><?=$banner_item['title'] ?></option>
                                <?php
                                        endif;
                                    endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">??????</label>
                        <div class="controls">
                            <input type="hidden" id="hid_sel_tag" name="hid_sel_tag" />
                            <select id="sel_tag" name="sel_tag" multiple data-rel="chosen">
                                <?php
                                    $tag_list = get_article_tag_list_by_code($code);
                                    $article_tag_id_arr = get_article_tag_id_arr_by_article_id($id);
                                    
                                    foreach ($tag_list as $tag_item) :
                                        if(in_array($tag_item['id'], $article_tag_id_arr)) :
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
                        <button type="submit" class="btn btn-primary">??????</button>
                        <a class='btn' href='<?=base_url().$this->admin_library->get_return_url() ?>'>??????</a>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include('common/footer_view.php'); ?>