<?php include('common/header_view.php'); ?>
    
    <script>
        $(function () {

            $("#sortable-a, #sortable-1, #sortable-2, #sortable-3, #sortable-4").sortable({
                connectWith: ".connectedSortableA",
                receive: function (event, ui) {
                    $(this).find("li").each(function (index) {
                        if ($(this).html() !== ui.item.html())
                            $("#sortable-a").append($(this));
                    });
                }
            }).disableSelection();
            
             $("#btn-add").click(function () {
                var id_arr = [];
                var str_arr = [];
                $(".sortable-down", "#sortable-down-area").each(function(){
                    var id = $(this).children('li').attr('data');
                    var str = $(this).children('li').html();
                    if(id){
                        id_arr.push(id);
                        str_arr.push(str);
                    }
                });
                
                var ids = id_arr.join();
                var id_str = str_arr.join();
                
                if(ids) {
                    $.post('<?=base_url_admin() ?>/product_category_relation/add', { ids: ids },
                        function (data) {
                            if (data == "success") {
                                $(".message-row").html(id_str + ' 新增成功');
                            } else if(data == "duplicate") {
                                $(".message-row").html(id_str + ' 已存在');
                            }
                        }, "html");
                }
            });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/product_category_relation">分類連結</a>
        <span class="divider">/</span>
        新增資料
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <fieldset>
                    <div class="control-group">
                        <div class="controls">
                            <div id="sortable-down-area" class="add-row">
                                <ul class="connectedSortableA sortable-down alert ui-sortable" id="sortable-1">
                                </ul>
                                <ul class="connectedSortableA sortable-down alert ui-sortable" id="sortable-2">
                                </ul>
                                <ul class="connectedSortableA sortable-down alert ui-sortable" id="sortable-3">
                                </ul>
                                <ul class="connectedSortableA sortable-down alert ui-sortable" id="sortable-4">
                                </ul>
                                <a id="btn-add" class="btn" href="#"><i class="icon-ok"></i></a>
                            </div>
                            <div class="clear"></div>
                            <div class="message-row error"></div>
                            <div class="clear"></div>
                            <div class="select-row">
                                <ul class="connectedSortableA sortable-up ui-sortable" id="sortable-a">
                                    <?php foreach($result as $item): ?>
                                        <li class="ui-state-default pull-left" data="<?=$item['id'] ?>"><?=$item['name'] ?></li>
                                    <?php endforeach; ?>
                                
                                </ul>
                            </div>                            
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class='btn' href='<?=base_url().$this->admin_library->get_return_url() ?>'>完成</a>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include('common/footer_view.php'); ?>