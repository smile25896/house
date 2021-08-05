<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("select[name='enable']").val('<?=$enable ?>');
            $("select[name='auth']").val('<?=$auth ?>');
            $("input[name='search']").val('<?=$search ?>');
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/member">會員管理</a>
        <span class="divider">/</span>
        資料列表
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" method="post" action="<?=base_url_admin() ?>/member/import" enctype="multipart/form-data">
                <div class="dataTables_wrapper">
                    <div class="row-fluid search-bar">
                        <div class="span4">
                            <button class="btn btn-primary form-export"><i class="icon-arrow-down icon-white"></i>匯出</button>
                        </div>
                        <div class="span8 text-right">
                            <input class="input-file uniform_on" name="fil_import" type="file"/>
                            <button type="submit" class="btn btn-primary"><i class="icon-arrow-up icon-white"></i>匯入</button>
                        </div>
                    </div>
                </div>
                </form>
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <div class="dataTables_wrapper">
                    <div class="row-fluid search-bar">
                        <div class="span10">
                            <select name="enable" class="query_field width-09 margin-right-04">
                                <option value="">請選擇</option>
                                <option value="0"><?=get_enable_text(0) ?></option>
                                <option value="1"><?=get_enable_text(1) ?></option>
                            </select>
                            <select name="auth" class="query_field width-09 margin-right-04">
                                <option value="">請選擇</option>
                                <option value="0"><?=get_auth_text(0) ?></option>
                                <option value="1"><?=get_auth_text(1) ?></option>
                            </select>
                            <div class="dataTables_filter input-append">
        						<input type="text" name="search" class="query_field" placeholder="電子郵件"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/member" class="btn">全部</a>
                            </div>
                        </div>
                        <div class="span2 text-right">
                            <a href="<?=base_url_admin() ?>/member/add" class="btn btn-warning"><i class="icon-plus icon-white"></i>新增</a>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="width-03 query_sort" s1="id">
                                    ID
                                </th>
                                <th class="query_sort" s1="email">
                                    電子郵件
                                </th>
                                <th class="width-10 query_sort" s1="name">
                                    姓名
                                </th>
                                <th class="width-10 query_sort" s1="mobile">
                                    手機
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
                                        <?=$item['email'] ?>
                                    </td>
                                    <td>
                                        <?=$item['name'] ?>
                                    </td>
                                    <td>
                                        <?=$item['mobile'] ?>
                                    </td>
                                    <td>
                                        <a class='btn btn-warning' href='<?=base_url_admin() ?>/member/send_auth/<?=$item['id'] ?>'><i class='icon-envelope icon-white'></i>驗證信 </a>
                                        <a class='btn btn-warning' href='<?=base_url_admin() ?>/member/send_reset_password/<?=$item['id'] ?>'><i class='icon-envelope icon-white'></i>密碼信 </a>
                                        <a class='btn btn-inverse form-show' href="<?=base_url_admin() ?>/member/enable/<?=$item['id'] ?>/<?=$item['enable'] ^ 1 ?>"><i class='<?=($item['enable'] ? 'icon-star' : 'icon-star-empty') ?> icon-white'></i><?=get_enable_text($item['enable']) ?> </a>
                                        <a class='btn btn-inverse form-show' href='<?=base_url_admin() ?>/member/auth/<?=$item['id'] ?>/<?=$item['auth'] ^ 1 ?>'><i class='<?=($item['auth'] ? 'icon-star' : 'icon-star-empty') ?> icon-white'></i><?=get_auth_text($item['auth']) ?> </a>
                                        <div style="height: 6px;"></div>
                                        <a class='btn btn-success form-view' href='<?=base_url_admin() ?>/member/detail/<?=$item['id'] ?>'><i class='icon-zoom-in icon-white'></i>檢視 </a>
                                        <a href="<?=base_url_admin() ?>/member/edit/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>修改 </a>
                                        <a href="<?=base_url_admin() ?>/member/edit_password/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>修改密碼 </a>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/member/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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