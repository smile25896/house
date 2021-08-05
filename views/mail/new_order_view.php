<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    	<title></title>
    </head>
    <body>
        <div>您好：</div>
        <div>您訂購的明細如下</div>
        <table border="1" style="width:50%;">
            <thead>
                <tr style="text-align: center;">
                    <th>名稱</th>
                    <th>原價</th>
                    <th>特價</th>
                    <th>數量</th>
                    <th>小計</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $item): ?>
                    <tr>
                        <td><?=$item['name'] ?></td>
                        <td><?=$item['price_original'] ?> 元</td>
                        <td><?=$item['price_special'] ?> 元</td>
                        <td><?=$item['amount'] ?></td>
                        <td><?=$item['subtotal'] ?> 元</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <ul>
            <li>共有 <?=$allamount ?> 項商品</li>
            <li>運費 <?=$fee ?> 元</li>
            <li>總計 <?=$alltotal ?> 元</li>
        </ul>
    </body>
</html>