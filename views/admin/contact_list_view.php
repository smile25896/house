<?php include('common/header_view.php'); ?>
    
    <script>
        $(function(){
            $("input[name='search']").val('<?=$search ?>');
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/contact">連絡我們</a>
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
                                <input type="text" name="search" class="query_field" placeholder="姓名"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/contact" class="btn">全部</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="width-03 query_sort" s1="id">
                                    ID
                                </th>
                                <th class="width-08 query_sort" s1="name">
                                    姓名
                                </th>
                                <th class="width-16 query_sort" s1="email">
                                    電子郵件
                                </th>
                                <th class="width-08 query_sort" s1="tel">
                                    電話
                                </th>
                                <th class="query_sort" s1="message">
                                    詢問內容
                                </th>
                                <th class="width-12 query_sort" s1="create_datetime">
                                    詢問時間
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
                                        <?=$item['name'] ?>
                                    </td>
                                    <td>
                                        <?=$item['email'] ?>
                                    </td>
                                    <td>
                                        <?=$item['tel'] ?>
                                    </td>
                                    <td style="text-align: left">
                                        <span data-rel="popover" data-content="<?=str_replace('"', '”', $item['message']) ?>" title="<?=$item['name'] ?>">
                                        <?php
                                            $len1 = strlen($item['message']);
                                            $str = mb_substr($item['message'], 0, 38, "UTF-8");
                                            $len2 = strlen($str);
                                            
                                            echo ($len1 == $len2) ? $str : $str."…";
                                        ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?=$item['create_date'] ?>
                                    </td>
                                    <td>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/contact/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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