<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("input[name='search']").val('<?=$search ?>');
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/trace">追踨商品</a>
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
                        <div class="span12">
                            <div class="dataTables_filter input-append">
        						<input type="text" name="search" class="query_field" placeholder="會員姓名"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/trace" class="btn">全部</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="query_sort" s1="member_id">
                                    會員姓名
                                </th>
                                <th class="query_sort" s1="product_id">
                                    商品名稱
                                </th>
                                <th class="width-07">
                                    維護
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $item): ?>
                                <tr>
                                    <td>
                                        <?=$item['member_name'] ?>
                                    </td>
                                    <td>
                                        <?=$item['product_name'] ?>
                                    </td>
                                    <td>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/trace/del/<?=$item['member_id'] ?>/<?=$item['product_id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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