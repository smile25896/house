<?php include('common/header_view.php'); ?>
    
    <script>
        $(function () {
            $("#my_form").validate({
                rules: {
                    txt_message: "required"
                }
            });
        });
    </script>
    
    <form id="my_form" method="post" action="<?=current_url() ?>">
        <div>
            接收人
            <select name="sel_administrator_id" class="width-10">
                <?php
                    $administrator_list = get_administrator_list_all();     
                    
                    foreach($administrator_list as $administrator_item) :                           
                ?>
                <option value="<?=$administrator_item['id'] ?>"><?=$administrator_item['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            訊息
            <textarea name="txt_message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">確定</button>
    </form>

<?php include('common/footer_view.php'); ?>