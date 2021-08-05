<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("select[name='enable']").val('<?=$enable ?>');
            $("input[name='search']").val('<?=$search ?>');
            
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
        <a href="<?=base_url_admin() ?>/product">商品管理</a>
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
                        <div class="span10">
                            <button type="submit" class="btn btn-primary">修改資料</button>
                            <select name="enable" class="query_field width-08 margin-right-04">
                                <option value="">請選擇</option>
                                <option value="0"><?=get_enable_text(0) ?></option>
                                <option value="1"><?=get_enable_text(1) ?></option>
                            </select>
                            <select name="category_a" class="query_field width-10 margin-right-04"></select>
                            <select name="category_b" class="query_field width-10 margin-right-04"></select>
                            <select name="category_c" class="query_field width-10 margin-right-04"></select>
                            <select name="category_d" class="query_field width-10 margin-right-04"></select>
                            <div class="dataTables_filter input-append">
        						<input type="text" name="search" class="query_field" placeholder="名稱"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/product" class="btn">全部</a>
                            </div>
                        </div>
                        <div class="span2 text-right">
                            <a href="<?=base_url_admin() ?>/product/add" class="btn btn-warning"><i class="icon-plus icon-white"></i> 新增</a>
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
                                <th class="width-06 query_sort" s1="category_a">
                                    分類 1
                                </th>
                                <th class="width-06 query_sort" s1="category_b">
                                    分類 2
                                </th>
                                <th class="width-06 query_sort" s1="category_c">
                                    分類 3
                                </th>
                                <th class="width-06 query_sort" s1="category_d">
                                    分類 4
                                </th>
                                <th class="query_sort" s1="name">
                                    名稱
                                </th>
                                <th class="width-04 query_sort" s1="price_original">
                                    原價
                                </th>
                                <th class="width-04 query_sort" s1="price_special">
                                    特價
                                </th>
                                <th class="width-04 query_sort" s1="stock">
                                    庫存
                                </th>
                                <th class="width-25">
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
                                        <?=get_product_category_name($item['category_a']); ?>
                                    </td>
                                    <td>
                                        <?=get_product_category_name($item['category_b']); ?>
                                    </td>
                                    <td>
                                        <?=get_product_category_name($item['category_c']); ?>
                                    </td>
                                    <td>
                                        <?=get_product_category_name($item['category_d']); ?>
                                    </td>
                                    <td style="text-align: left">
                                        <?=$item['name'] ?>
                                    </td>
                                    <td>
                                        <?=$item['price_original'] ?>
                                    </td>
                                    <td>
                                        <?=$item['price_special'] ?>
                                    </td>
                                    <td>
                                        <input type="text" name="stock_<?=$item['id'] ?>" class="width-03" value="<?=$item['stock'] ?>"/>
                                    </td>
                                    <td>
                                        <a class='btn btn-inverse form-show' href="<?=base_url_admin() ?>/product/enable/<?=$item['id'] ?>/<?=$item['enable'] ^ 1 ?>"><i class='<?=($item['enable'] ? 'icon-star' : 'icon-star-empty') ?> icon-white'></i><?=get_enable_text($item['enable']) ?> </a>
                                        <a class='btn btn-success form-view' href='<?=base_url_admin() ?>/product/detail/<?=$item['id'] ?>'><i class='icon-zoom-in icon-white'></i>檢視</a>
                                        <a href="<?=base_url_admin() ?>/product/edit/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>修改</a>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/product/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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