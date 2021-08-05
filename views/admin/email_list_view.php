<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("input[name='search']").val('<?=$search ?>');
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/email">Email 記錄</a>
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
        						<input type="text" name="search" class="query_field" placeholder="標題"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/email" class="btn">全部</a>
                            </div>
                        </div>
                        <div class="span2 text-right">
                            <a href="<?=base_url_admin() ?>/email/add" class="btn btn-warning"><i class="icon-plus icon-white"></i>新增</a>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="width-03 query_sort" s1="id">
                                    ID
                                </th>
                                <th class="width-30 query_sort" s1="email">
                                    Email
                                </th>
                                <th class="query_sort" s1="subject">
                                    標題
                                </th>
                                <th class="width-12 query_sort" s1="create_datetime">
                                    寄送時間
                                </th>
                                <th class="width-20">
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
                                        <?=$item['email'] ?>
                                    </td>
                                    <td>
                                        <?=$item['subject'] ?>
                                    </td>
                                    <td>
                                        <?=$item['create_date'] ?>
                                    </td>
                                    <td>
                                        <a class='btn btn-warning' href='<?=base_url_admin() ?>/email/send/<?=$item['id'] ?>'><i class='icon-envelope icon-white'></i>發送 </a>
                                        <a class='btn btn-success form-view' href='<?=base_url_admin() ?>/email/detail/<?=$item['id'] ?>'><i class='icon-zoom-in icon-white'></i>檢視</a>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/email/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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