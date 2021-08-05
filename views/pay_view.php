<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title></title>
</head>
<body onload="document.pay.submit();">
<!-- <body> -->
    <form name="pay" action='https://api.pay2go.com/MPG/mpg_gateway' method="post">
        <input type='hidden' name='MerchantID' value='<?=$MerchantID ?>'/>
        <input type='hidden' name='RespondType' value='<?=$RespondType ?>'/>
        <input type='hidden' name='CheckValue' value='<?=$CheckValue ?>'/>
        <input type='hidden' name='TimeStamp' value='<?=$TimeStamp ?>'/>
        <input type='hidden' name='Version' value='<?=$Version ?>'/>
        <input type='hidden' name='MerchantOrderNo' value='<?=$MerchantOrderNo ?>'/>
        <input type='hidden' name='Amt' value='<?=$Amt ?>'/>
        <input type='hidden' name='ItemDesc' value='<?=$ItemDesc ?>'/>
        <input type='hidden' name='ReturnURL' value='<?=base_url() ?>order/pay_feedback'/>
        <input type='hidden' name='Email' value='<?=$Email ?>'/>
        <input type='hidden' name='LoginType' value='<?=$LoginType ?>'/>
    </form>
</body>
</html>