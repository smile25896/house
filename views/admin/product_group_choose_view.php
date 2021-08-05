<?php
    $no_visible_elements = true;
    include('common/header_view.php');
?>
    
    <script src="<?=base_url_js() ?>/jquery.query.js"></script>
    <script>
        $(function(){
            $('.form-query').on('click', function(){
                var url = $(location).attr('href').split('?')[0];
                var q = getFormQuery();
                
                location.href = url + q.remove('p').toString();
                return false;
            });
            
            function getFormQuery(){
                var q = $.query;
                
                $('.query_field').each(function() {
                    if($(this).val())
                        q = q.set($(this).attr('name'), $(this).val());
                    else
                        q = q.remove($(this).attr('name'));
                });
                
                return q;
            }
            
            $(".btn-select").click(function(){
                $.get("<?=base_url_admin() ?>/product_group/add/<?=$group ?>/" + $(this).attr('data-id'), function( data ) {
                    parent.jQuery.colorbox.close();
                    window.parent.location.reload();
                });
            });
        });
    </script>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <div class="dataTables_wrapper">
                    <div class="row-fluid search-bar">
                        <div class="span12">
                            <div class="dataTables_filter input-append">
        						<input type="text" name="search" class="query_field_txt query_field" placeholder="標題" value="<?=$search ?>"/><button type="button" class="btn form-query">查詢</button><a href="<?=base_url_admin() ?>/product_group/choose/<?=$group ?>" class="btn">全部</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th class="width-03 query_sort" s1="id">
                                    ID
                                </th>
                                <th class="query_sort" s1="name">
                                    名稱
                                </th>
                                <th class="width-08">
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
                                        <a href="#" data-id="<?=$item['id'] ?>" class="btn btn-warning btn-select"><i class="icon-ok icon-white"></i>選取</a>
                                        
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