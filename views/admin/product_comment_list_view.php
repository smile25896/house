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
        <a href="<?=base_url_admin() ?>/product_comment">商品留言</a>
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
                            <select name="enable" class="query_field width-09 margin-right-04">
                                <option value="">請選擇</option>
                                <option value="0"><?=get_enable_text(0) ?></option>
                                <option value="1"><?=get_enable_text(1) ?></option>
                            </select>
                            <div class="dataTables_filter input-append">
        						<input type="text" name="search" class="query_field" placeholder="標題"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/product_comment" class="btn">全部</a>
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
                                <th class="width-14 query_sort" s1="email">
                                    電子郵件
                                </th>
                                <th class="query_sort" s1="product_id">
                                    商品標題
                                </th>
                                <th class="query_sort" s1="comment">
                                    留言時間
                                </th>
                                <th class="query_sort" s1="comment">
                                    留言
                                </th>
                                <th class="query_sort" s1="reply">
                                    回覆
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
                                        <?=$item['id'] ?>
                                    </td>
                                    <td>
                                        <?=$item['name'] ?>
                                    </td>
                                    <td>
                                        <?=$item['email'] ?>
                                    </td>
                                    <td>
										<?php
                                            $product_item = get_product_item($item['product_id']);
                                            echo $product_item['name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?=$item['create_date'] ?>
                                    </td>
                                    <td style="text-align: left">
                                        <span data-rel="popover" data-content="<?=str_replace('"', '”', $item['comment']) ?>" >
                                        <?php
                                            $len1 = strlen($item['comment']);
                                            $str = mb_substr($item['comment'], 0, 38, "UTF-8");
                                            $len2 = strlen($str);
                                            
                                            echo ($len1 == $len2) ? $str : $str."…";
                                        ?>
                                        </span>
                                    </td>
                                    <td style="text-align: left">
                                        <span data-rel="popover" data-content="<?=str_replace('"', '”', $item['reply']) ?>" >
                                        <?php
                                            $len1 = strlen($item['reply']);
                                            $str = mb_substr($item['reply'], 0, 38, "UTF-8");
                                            $len2 = strlen($str);
                                            
                                            echo ($len1 == $len2) ? $str : $str."…";
                                        ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a class='btn btn-inverse form-show' href="<?=base_url_admin() ?>/product_comment/enable/<?=$item['id'] ?>/<?=$item['enable'] ^ 1 ?>"><i class='<?=($item['enable'] ? 'icon-star' : 'icon-star-empty') ?> icon-white'></i><?=get_enable_text($item['enable']) ?> </a>
                                        <a class='btn btn-success form-view' href='<?=base_url_admin() ?>/product_comment/detail/<?=$item['id'] ?>'><i class='icon-zoom-in icon-white'></i>檢視</a>
                                        <a href="<?=base_url_admin() ?>/product_comment/reply/<?=$item['id'] ?>" class="btn btn-info"><i class="icon-edit icon-white"></i>回覆</a>
                                        <a href="#" onclick="if (confirm('是否刪除')) { location.href = '<?=base_url_admin() ?>/product_comment/del/<?=$item['id'] ?>'}" class="btn btn-danger form-del"><i class="icon-trash icon-white"></i>刪除 </a>
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