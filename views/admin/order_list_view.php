<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("input[name='search']").val('<?=$search ?>');
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/order">訂單管理</a>
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
                            <div class="dataTables_filter input-append">
        						<input type="text" name="search" class="query_field" placeholder="訂購人"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/order" class="btn">全部</a>
                            </div>
                        </div>
                        <div class="span2 text-right">
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="width-08 query_sort" s1="id">
                                    ID
                                </th>
                                <th class="width-15 query_sort" s1="no">
                                    訂單編號
                                </th>
                                <!--th class="query_sort" s1="member_name">
                                    訂購人
                                </th-->
                                <th class="width-15 query_sort" s1="create_date">
                                    訂購日期
                                </th>
                                <th class="query_sort" s1="receiver_name">
                                    收件人
                                </th>
                                <th class="query_sort" s1="receiver_tel">
                                    電話
                                </th>
								<th class="query_sort" s1="receiver_mobile">
                                    手機
                                </th>
                                <th class="width-08 query_sort" s1="pay_type">
                                    付款方式
                                </th>
                                <!--th class="width-08 query_sort" s1="pay">
                                    付款狀態
                                </th-->
                                <!--th class=" query_sort" s1="pay">
                                    美安資訊
                                </th-->
                                <th class="width-25">
                                    維護
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $item): ?>
                                <tr>
                                    <td>
                                        <?=$item['id'] ?>
                                    </td>
                                    <td>
                                        <?=$item['no'] ?>
                                    </td>
                                    <!--td>
                                        <?=$item['member_name'] ?>
                                    </td-->
                                    <td>
                                        <?=$item['create_date'] ?>
                                    </td>
                                    <td>
                                        <?=$item['receiver_name'] ?>
                                    </td>
                                    <td>
                                        <?=$item['receiver_tel'] ?>
                                    </td>
									<td>
                                        <?=$item['receiver_mobile'] ?>
                                    </td>
                                    <td>
                                        <?=get_pay_type_text($item['pay_type']) ?>
                                    </td>
                                    <!--td>
                                        <?=get_pay_text($item['pay']) ?>
                                    </td>
                                    <td>
                                    <?
									if ($item['rid'] != "") {
									?>
                                        RID：<?=$item['rid'] ?><br>
                                        Click_ID：<?=$item['click_id'] ?>
                                    <?
									} else {
									     echo "";
									}
									?>
                                    </td-->
                                    <td>
                                        <a class='btn btn-success form-view' href='<?=base_url_admin() ?>/order/detail/<?=$item['id'] ?>'><i class='icon-zoom-in icon-white'></i>檢視</a>
                                        <?php if($item['reduce_stock']) : ?>
                                            <a href="#" class="btn btn-default"><i class="icon-edit icon-white"></i>已出貨</a>
                                        <?php else : ?>
                                            <a href="<?=base_url_admin() ?>/order/stock/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>未出貨</a>
                                        <?php endif; ?>
                                        <!--<a href="<?=base_url_admin() ?>/order/edit/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>修改</a>-->
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/order/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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