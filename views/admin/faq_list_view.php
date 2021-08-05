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
        <a href="<?=base_url_admin() ?>/faq">問與答</a>
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
                            <select name="enable" class="query_field width-09 margin-right-04">
                                <option value="">請選擇</option>
                                <option value="0"><?=get_enable_text(0) ?></option>
                                <option value="1"><?=get_enable_text(1) ?></option>
                            </select>
                            <div class="dataTables_filter input-append">
                                <input type="text" name="search" class="query_field" placeholder="姓名"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/faq" class="btn">全部</a>
                            </div>
                        </div>
                        <div class="span2 text-right">
                            <a href="<?=base_url_admin() ?>/faq/add" class="btn btn-warning"><i class="icon-plus icon-white"></i>新增</a>
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
                                <th class="width-08 query_sort" s1="name">
                                    姓名
                                </th>
                                <th class="width-16 query_sort" s1="email">
                                    電子郵件
                                </th>
                                <th class="query_sort" s1="question">
                                    問題
                                </th>
                                <th class="query_sort" s1="answer">
                                    答案
                                </th>
                                <th class="width-12 query_sort" s1="create_datetime">
                                    時間
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
                                        <input type="text" name="sort_<?=$item['id'] ?>" class="width-03" value="<?=$item['sort'] ?>"/>
                                    </td>
                                    <td>
                                        <?=$item['id'] ?>
                                        <input type="hidden" name="id_<?=$item['id'] ?>"/>
                                    </td>
                                    <td>
                                        <?=$item['name'] ?>
                                    </td>
                                    <td>
                                        <?=$item['email'] ?>
                                    </td>
                                    <td style="text-align: left">
                                        <span data-rel="popover" data-content="<?=str_replace('"', '”', $item['question']) ?>" title="<?=$item['name'] ?>">
                                        <?php
                                            $len1 = strlen($item['question']);
                                            $str = mb_substr($item['question'], 0, 38, "UTF-8");
                                            $len2 = strlen($str);
                                            
                                            echo ($len1 == $len2) ? $str : $str."…";
                                        ?>
                                        </span>
                                    </td>
                                    <td style="text-align: left">
                                        <span data-rel="popover" data-content="<?=str_replace('"', '”', $item['answer']) ?>" title="<?=$item['name'] ?>">
                                        <?php
                                            $len1 = strlen($item['answer']);
                                            $str = mb_substr($item['answer'], 0, 38, "UTF-8");
                                            $len2 = strlen($str);
                                            
                                            echo ($len1 == $len2) ? $str : $str."…";
                                        ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?=$item['create_datetime'] ?>
                                    </td>
                                    <td>
                                        <a class='btn btn-inverse form-show' href="<?=base_url_admin() ?>/faq/enable/<?=$item['id'] ?>/<?=$item['enable'] ^ 1 ?>"><i class='<?=($item['enable'] ? 'icon-star' : 'icon-star-empty') ?> icon-white'></i><?=get_enable_text($item['enable']) ?> </a>
                                        <a href="<?=base_url_admin() ?>/faq/edit/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>修改</a>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/faq/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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