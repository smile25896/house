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
        <a href="<?=base_url_admin() ?>/administrator">管理員資料</a>
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
                                <select name="enable" class="query_field width-09 margin-right-04">
                                    <option value="">請選擇</option>
                                    <option value="0"><?=get_enable_text(0) ?></option>
                                    <option value="1"><?=get_enable_text(1) ?></option>
                                </select>
                                <div class="dataTables_filter input-append">
            						<input type="text" name="search" class="query_field" placeholder="帳號"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/administrator" class="btn">全部</a>
                                </div>
                            </div>
                            <div class="span2 text-right">
                                <a href="<?=base_url_admin() ?>/administrator/add" class="btn btn-warning"><i class="icon-plus icon-white"></i> 新增</a>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered bootstrap-datatable">
                            <thead>
                                <tr>
                                    <th class="width-03 query_sort" s1="id">
                                        ID
                                    </th>
                                    <th class="width-09 query_sort" s1="level">
                                        層級
                                    </th>
                                    <th class="width-12 query_sort" s1="account">
                                        帳號
                                    </th>
                                    <th class="query_sort" s1="name">
                                        名稱
                                    </th>
                                    <th class="width-07 query_sort" s1="login_count">
                                        登入次數
                                    </th>
                                    <th class="width-12 query_sort" s1="login_datetime">
                                        最後登入時間
                                    </th>
                                    <th class="width-26">
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
                                            <?=get_level_text($item['level']) ?>
                                        </td>
                                        <td>
                                            <?=$item['account'] ?>
                                        </td>
                                        <td>
                                            <?=$item['name'] ?>
                                        </td>
                                        <td>
                                            <?=$item['login_count'] ?>
                                        </td>
                                        <td>
                                            <?=$item['login_datetime'] ?>
                                        </td>
                                        <td>
                                            <a class='btn btn-inverse form-show' href="<?=base_url_admin() ?>/administrator/enable/<?=$item['id'] ?>/<?=$item['enable'] ^ 1 ?>"><i class='<?=($item['enable'] ? 'icon-star' : 'icon-star-empty') ?> icon-white'></i><?=get_enable_text($item['enable']) ?> </a>
                                            <a href="<?=base_url_admin() ?>/administrator/edit/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>修改 </a>
                                            <a href="<?=base_url_admin() ?>/administrator/edit_password/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>修改密碼 </a>
                                            <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/administrator/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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