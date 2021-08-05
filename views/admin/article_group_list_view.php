<?php include('common/header_view.php'); ?>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/article_group/<?=$code ?>/<?=$group ?>">文章群組</a>
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
                            <button type="submit" class="btn btn-primary">修改順序</button>
                        </div>
                        <div class="span2 text-right">
                            <a href="<?=base_url_admin() ?>/article_group/choose/<?=$code ?>/<?=$group ?>" class="btn btn-warning iframe"><i class="icon-plus icon-white"></i>新增</a>
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
                                    標題
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
                                        <input type="text" name="sort_<?=$item['gid'] ?>" class="width-03" value="<?=$item['sort'] ?>"/>
                                    </td>
                                    <td>
                                        <?=$item['id'] ?>
                                        <input type="hidden" name="id_<?=$item['gid'] ?>"/>
                                    </td>
                                    <td class="text-left">
                                        <?=$item['title'] ?>
                                    </td>
                                    <td>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/article_group/del/<?=$item['gid'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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