<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("select[name='enable']").val('<?=$enable ?>');
            $("input[name='search']").val('<?=$search ?>');
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/message">個人訊息</a>
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
                            
                        </div>
                        <div class="span2 text-right">
                            <a href="<?=base_url_admin() ?>/message/add" class="btn btn-warning"><i class="icon-plus icon-white"></i>新增</a>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="width-03 query_sort" s1="id">
                                    ID
                                </th>
                                <th class="width-12 query_sort" s1="create_member">
                                    發送會員
                                </th>
                                <th class="width-12 query_sort" s1="create_member">
                                    接收會員
                                </th>
                                <th class="query_sort" s1="message">
                                    訊息
                                </th>
                                <th class="width-12 query_sort" s1="create_datetime">
                                    發送時間
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
                                        <?=$item['id'] ?>
                                    </td>
                                    <td>
                                        <?=get_member_name($item['create_member']) ?>
                                    </td>
                                    <td>
                                        <?=get_member_name($item['member_id']) ?>
                                    </td>
                                    <td>
                                        <?=$item['message'] ?>
                                    </td>
                                    <td>
                                        <?=$item['create_datetime'] ?>
                                    </td>
                                    <td>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/message/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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