<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("select[name='enable']").val('<?=$enable ?>');
            
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
                    $("select[name='category_a']").html(response);
                    $("select[name='category_a']").change();
                }
            });
            
            $("select[name='category_a']").change(function () {
                var category_a = $("select[name='category_a']").val();
                
                $.ajax({
                    type: "POST",
                    url: "<?=base_url_admin() ?>/product_category_relation/get_product_category_b_for_select",
                    data: { sel: category_b, category_a: category_a },
                    dataType: "html",
                    success: function (response) {
                        $("select[name='category_b']").html(response);
                        $("select[name='category_b']").change();
                    }
                });
            });
            
            $("select[name='category_b']").change(function () {
                var category_a = $("select[name='category_a']").val();
                var category_b = $("select[name='category_b']").val();
                
                $.ajax({
                    type: "POST",
                    url: "<?=base_url_admin() ?>/product_category_relation/get_product_category_c_for_select",
                    data: { sel: category_c, category_a: category_a, category_b: category_b },
                    dataType: "html",
                    success: function (response) {
                        $("select[name='category_c']").html(response);
                        $("select[name='category_c']").change();
                    }
                });
            });
            
            $("select[name='category_c']").change(function () {
                var category_a = $("select[name='category_a']").val();
                var category_b = $("select[name='category_b']").val();
                var category_c = $("select[name='category_c']").val();
                
                $.ajax({
                    type: "POST",
                    url: "<?=base_url_admin() ?>/product_category_relation/get_product_category_d_for_select",
                    data: { sel: category_d, category_a: category_a, category_b: category_b, category_c: category_c },
                    dataType: "html",
                    success: function (response) {
                        $("select[name='category_d']").html(response);
                    }
                });
            });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/product_category_relation">分類連結</a>
        <span class="divider">/</span>
        資料列表
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <div class="dataTables_wrapper">
                    <div class="row-fluid search-bar">
                        <div class="span9">
                            <button type="submit" class="btn btn-primary">修改順序</button>
                            <select name="enable" class="query_field width-09 margin-right-04">
                                <option value="">請選擇</option>
                                <option value="0"><?=get_enable_text(0) ?></option>
                                <option value="1"><?=get_enable_text(1) ?></option>
                            </select>
                            <select name="category_a" class="query_field width-12 margin-right-04"></select>
                            <select name="category_b" class="query_field width-12 margin-right-04"></select>
                            <select name="category_c" class="query_field width-12 margin-right-04"></select>
                            <select name="category_d" class="query_field width-12 margin-right-04"></select>
                            <div class="dataTables_filter input-append">
        						<button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/product_category_relation" class="btn">全部</a>
                            </div>
                        </div>
                        <div class="span3 text-right">
                            <a class='btn btn-success form-view' href='<?=base_url_admin() ?>/product_category_relation/chart'><i class='icon-zoom-in icon-white'></i>分類圖表 </a>
                            <a href="<?=base_url_admin() ?>/product_category_relation/add" class="btn btn-warning"><i class="icon-plus icon-white"></i> 新增</a>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="width-03 query_sort" s1="sort">
                                    順序
                                </th>
                                <th class="width-03 query_sort" s1="id">
                                    ID
                                </th>
                                <th>
                                    分類一
                                </th>
                                <th>
                                    分類二
                                </th>
                                <th>
                                    分類三
                                </th>
                                <th>
                                    分類四
                                </th>
                                <th class="width-13">
                                    維護
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $item): ?>
                                <tr>
                                    <td>
                                        <input type="text" name="sort_<?=$item['id'] ?>" class="width-03" value="<?=$item['sort'] ?>"/>
                                    </td>
                                    <td>
                                        <?=$item['id'] ?>
                                        <input type="hidden" name="id_<?=$item['id'] ?>"/>
                                    </td>
                                    <td>
                                        <?=get_product_category_name($item['category_a']) ?>
                                    </td>
                                    <td>
                                        <?=get_product_category_name($item['category_b']) ?>
                                    </td>
                                    <td>
                                        <?=get_product_category_name($item['category_c']) ?>
                                    </td>
                                    <td>
                                        <?=get_product_category_name($item['category_d']) ?>
                                    </td>
                                    <td>
                                        <a class='btn btn-inverse form-show' href="<?=base_url_admin() ?>/product_category_relation/enable/<?=$item['id'] ?>/<?=$item['enable'] ^ 1 ?>"><i class='<?=($item['enable'] ? 'icon-star' : 'icon-star-empty') ?> icon-white'></i><?=get_enable_text($item['enable']) ?> </a>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/product_category_relation/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <?php include('common/page_bar_view.php'); ?>
                </div>
                </form>
            </div>
        </div>
    </div>
    
<?php include('common/footer_view.php'); ?>