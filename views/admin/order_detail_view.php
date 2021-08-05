<link href="<?=base_url_css() ?>/admin/bootstrap-spacelab.min.css" rel="stylesheet"/>
<link href="<?=base_url_css() ?>/admin/admin.css" rel="stylesheet"/>

<div class="form-horizontal">
    <div class="modal-header">
        <h3>檢視資料</h3>
    </div>
    <div class="row-fluid detail-content">
        <div class="span12">
            <div class="box-content">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">
                            <h4>訂單資料</h4></label>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            編號</label>
                        <div class="controls">
                            <?=$no ?>
                        </div>
                    </div>
                    <!--div class="control-group">
                        <label class="control-label">
                            訂購人</label>
                        <div class="controls">
                            <?=$member_name ?>
                        </div>
                    </div-->
                    <div class="control-group">
                        <label class="control-label">
                            訂購日期</label>
                        <div class="controls">
                            <?=$create_date ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            付款方式</label>
                        <div class="controls">
                            <?=get_pay_type_text($pay_type) ?>
                        </div>
                    </div>
                    <!--div class="control-group">
                        <label class="control-label">
                            付款狀態</label>
                        <div class="controls">
                            <?=get_pay_text($pay) ?>
                        </div>
                    </div-->
                    <div class="control-group">
                        <label class="control-label">
                            出貨狀態</label>
                        <div class="controls">
                            <? //=get_delivery_text($delivery)
							if ($reduce_stock == "1") {
								echo "已出貨";
							} else {
								echo "未出貨";
							}
							 ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            是否取消</label>
                        <div class="controls">
                            <?=get_cancel_text($cancel) ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <h4>商品資料</h4></label>
                    </div>
                    <div class="control-group">
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
                                        <td class="width-12"><?=$total ?> 元</td>
                                    </tr>
                                    <tr>
                                        <td>運費</td>
                                        <td><?=$fee ?> 元</td>
                                    </tr>
                                    <tr>
                                        <td>總計</td>
                                        <td><?=$alltotal ?> 元</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            <h4>寄送資料</h4></label>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            收件人</label>
                        <div class="controls">
                            <?=$receiver_name ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            電話</label>
                        <div class="controls">
                            <?=$receiver_tel ?>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label">
                            手機</label>
                        <div class="controls">
                            <?=$receiver_mobile ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            地址</label>
                        <div class="controls">
                            <?=$receiver_city.$receiver_county.$receiver_address ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            備註</label>
                        <div class="controls">
                            <?=$description ?>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>