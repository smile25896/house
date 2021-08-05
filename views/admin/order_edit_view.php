<?php include('common/header_view.php'); ?>
    
    <script>
        $(function () {
            $("select[name='sel_pay_type']").val('<?=$pay_type ?>');
            $("select[name='sel_pay']").val('<?=$pay ?>');
            $("select[name='sel_delivery']").val('<?=$delivery ?>');
            $("select[name='sel_cancel']").val('<?=$cancel ?>');
            $('.address_zone').ajaddress({ city: "<?=$receiver_city ?>", county: "<?=$receiver_county ?>" });
        });
    </script>
    
    <ul class="breadcrumb">
        <a href="<?=base_url_admin() ?>/home">首頁</a>
        <span class="divider">/</span>
        <a href="<?=base_url_admin() ?>/order">訂單管理</a>
        <span class="divider">/</span>
        修改資料
    </ul>
    
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well"></div>
            <div class="box-content">
                <form class="form-horizontal" id="my_form" method="post" action="<?=current_url() ?>">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">
                            編號</label>
                        <div class="controls">
                            <?=$no ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            訂購人</label>
                        <div class="controls">
                            <?=$member_name ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            訂購日期</label>
                        <div class="controls">
                            <?=$create_datetime ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            付款方式</label>
                        <div class="controls">
                            <select class="width-10" name="sel_pay_type">
                                <option value='0'><?=get_pay_type_text(0) ?></option>
                                <option value='1'><?=get_pay_type_text(1) ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            付款狀態</label>
                        <div class="controls">
                            <select class="width-10" name="sel_pay">
                                <option value='0'><?=get_pay_text(0) ?></option>
                                <option value='1'><?=get_pay_text(1) ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            出貨狀態</label>
                        <div class="controls">
                            <select class="width-10" name="sel_delivery">
                                <option value='0'><?=get_delivery_text(0) ?></option>
                                <option value='1'><?=get_delivery_text(1) ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            是否取消</label>
                        <div class="controls">
                            <select class="width-10" name="sel_cancel">
                                <option value='0'><?=get_cancel_text(0) ?></option>
                                <option value='1'><?=get_cancel_text(1) ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            商品資料</label>
                        <div class="controls">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>名稱</th>
                                        <th class="width-10">原價</th>
                                        <th class="width-10">特價</th>
                                        <th class="width-10">數量</th>
                                        <th class="width-10">小計</th>
                                    </tr>
                                    <?php foreach ($list as $item): ?>
                                    <tr>
                                        <td><?=$item["product_name"];?></td>
                                        <td><?=$item["product_price_original"];?>元</td>
                                        <td><?=$item["product_price_special"];?>元</td>
                                        <td><?=$item["amount"];?></td>
                                        <td><?=$item["subtotal"];?> 元</td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <table class="pull-right text-center">
                                <tbody>
                                    <tr>
                                        <td>共有 <?=count($list);?> 項商品  合計金額</td>
                                        <td class="width-12"><input class="input-xlarge focused width-04 text-right" name="txt_total" type="text" value="<?=$total ?>" /> 元</td>
                                    </tr>
                                    <tr>
                                        <td>運費</td>
                                        <td><input class="input-xlarge focused width-04 text-right" name="txt_fee" type="text" value="<?=$fee ?>" /> 元</td>
                                    </tr>
                                    <tr>
                                        <td>總計</td>
                                        <td><input class="input-xlarge focused width-04 text-right" name="txt_alltotal" type="text" value="<?=$alltotal ?>" /> 元</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            收件人</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-20" name="txt_receiver_name" type="text" value="<?=$receiver_name ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            電話</label>
                        <div class="controls">
                            <input class="input-xlarge focused width-12" name="txt_receiver_tel" type="text" value="<?=$receiver_tel ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            地址</label>
                        <div class="controls">
                            <div class="address_zone">
                                <span class="zipcode"></span>
                                <input type="hidden" name="hid_zipcode" class="zipcode"/>
                                <select class="city width-10" name="sel_city">
                                    <option value="">請選擇</option>
                                </select>
                                <select class="county width-10" name="sel_county">
                                    <option value="">請選擇</option>
                                </select>
                            </div>
                            <input type="text" class="address width-30" name="txt_address" value="<?=$receiver_address ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            備註</label>
                        <div class="controls">
                            <textarea class="width-30" name="txt_description"><?=$description ?></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">儲存</button>
                        <a class='btn' href='<?=base_url().$this->admin_library->get_return_url() ?>'>取消</a>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include('common/footer_view.php'); ?>