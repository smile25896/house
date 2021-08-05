<?php include('common/header_view.php'); ?>
<?php
if ($_SESSION['TOSENDORDER'] == "N") {
	$_SESSION['TOSENDORDER'] = "Y";
?>
    <!-- 寫至美安: --> 
			<iframe src="http://tracking.shopmarketplacenetwork.com/aff_l?offer_id=4057&adv_sub=<?=$no?>&amount=<?=$total?>" scrolling="no" frameborder="0" width="1" height="1"></iframe>
			<!-- // End Offer Conversion -->
	<!-- WRAPPER -->
<?php
}
?>
	<div class="wrapper border" style="background-color:#FFF;">
		<!-- HEADCONTENT -->
        <div class="headcontent">
            <div class="container">
                <div class="col-sm-6" style="padding-left: 30px; padding-right: 30px;">
                    <h1>完成訂購</h1>
                </div>
            </div>
        </div>
        <!-- /.headcontent -->
		
		
        <?php

		$db_host = "localhost";		/* MySQL 的主機名稱 */
		$db_port = "3306";			/* MySQL 的使用者名稱 */
		$db_user = "sk732_user";  //資料庫帳號
		$db_pass = "@sGcu5T4X_WV";  //資料庫密碼
		$db_name = "sk732_db";  //資料庫名稱

		$link = mysqli_connect($db_host,$db_user,$db_pass ,$db_name);
		mysqli_set_charset( $link , 'utf8' );
		  
		
		$SQL= "select * from `order` where no = '".$no."' ";
        $result1 = mysqli_query($link,$SQL);
		$row1=mysqli_fetch_object($result1);
		
		$alltotal = $row1->alltotal;
		$pay_type = $row1->pay_type;
		$MerchantTradeNo = $row1->no;
		
		//echo $pay_type . "";
		
		$ChoosePayment = "";
		if ($pay_type == "1") {
		    $ChoosePayment = "Credit";
		}
		if ($pay_type == "0") {
		    $ChoosePayment = "WebATM";
		}
		
		//商店代號3024768
		$HashKey = "Qi8dZWt3UC6JNwPF";
		$HashIV = "RVwPZGW9OmoR9F4L"; 
		//一般金流 介接 HashKey 7ol6aGM1BGsVM3ir
		//一般金流 介接 HashIV Rd0LDDGFwU0lFX3t
		
		$nowaddtime = date('Y/m/d H:i:s');
	
		//商店代號  2000132 測試 
		//$HashKey = "5294y06JbISpM5x9";
		//$HashIV = "v77hoKGq4kWxNNIS"; 
	
		$nowstr = "ChoosePayment=".$ChoosePayment."&ClientBackURL=http://www.mrsesame.com.tw&ItemName=芝麻先生線上購物&MerchantID=3024768&MerchantTradeDate=".$nowaddtime."&MerchantTradeNo=".$MerchantTradeNo."&PaymentInfoURL=http://www.mrsesame.com.tw/cart/repayback/&PaymentType=aio&ReturnURL=http://www.mrsesame.com.tw/cart/repayback/&TotalAmount=".$alltotal."&TradeDesc=芝麻先生線上購物";
		                          
	
		$nowstr = "HashKey=".$HashKey."&" . $nowstr . "&HashIV=" . $HashIV;

		$nowstr = urlencode($nowstr);

		$nowstr = strtolower($nowstr);

		$nowstr = str_replace('%2d', '-', $nowstr); 
		$nowstr = str_replace('%5f', '_', $nowstr); 
		$nowstr = str_replace('%2e', '.', $nowstr); 
		$nowstr = str_replace('%21', '!', $nowstr); 
		$nowstr = str_replace('%2a', '*', $nowstr); 
		$nowstr = str_replace('%28', '(', $nowstr); 
		$nowstr = str_replace('%29', ')', $nowstr);
		$nowstr = str_replace('%20', '+', $nowstr);

		$nowstr = md5($nowstr);

		$nowstr = strtoupper($nowstr);

		$CheckMacValue = $nowstr;
	
	    //：https://payment.ecpay.com.tw/Cashier/AioCheckOut/V5

		/*$HashKey = "xgYR2TtGLzE61rccuGvmzWoero5GPqGn";
		$HashIV = "GFfIzIpkh4rjwEv0";
		
		$timestr = time();
		
		$nowstr = "Amt=".$alltotal."";
		$nowstr = $nowstr . "&MerchantID=37134303&MerchantOrderNo=".$row1->no."&TimeStamp=".$timestr."&Version=1.2";
		
		$CheckValue_str = "HashKey=xgYR2TtGLzE61rccuGvmzWoero5GPqGn&" . $nowstr . "&HashIV=GFfIzIpkh4rjwEv0";
		//echo $CheckValue_str;
		$CheckValue = strtoupper(hash("sha256", $CheckValue_str));*/
		
		//https://payment.allpay.com.tw/Cashier/AioCheckOut/V2
		?>
       <form name="paymentfrm" action="https://payment.ecpay.com.tw/Cashier/AioCheckOut/V5" method="post">
          <input type="hidden" name="MerchantID" value="3024768" >
          <input type="hidden" name="MerchantTradeNo" value="<?=$MerchantTradeNo?>" >
          <input type="hidden" name="MerchantTradeDate" value="<?=$nowaddtime?>" >
          <input type="hidden" name="PaymentType" value="aio" >
          <input type="hidden" name="TotalAmount" value="<?=$alltotal?>" >
          <input type="hidden" name="TradeDesc" value="芝麻先生線上購物" >
          <input type="hidden" name="ItemName" value="芝麻先生線上購物" >
          <input type="hidden" name="ReturnURL" value="http://www.mrsesame.com.tw/cart/repayback/" >
          <input type="hidden" name="PaymentInfoURL" value="http://www.mrsesame.com.tw/cart/repayback/" >
          <input type="hidden" name="ChoosePayment" value="<?=$ChoosePayment?>" >
          <input type="hidden" name="CheckMacValue" value="<?=$CheckMacValue?>" >
          <input type="hidden" name="ClientBackURL" value="http://www.mrsesame.com.tw" >
       </form>
        <SCRIPT LANGUAGE="JavaScript">
       <!--
	       function seaFuncTypecust1() {
		       alert("請按下確認鍵開始線上金流授權，這將花費您幾秒鐘的時間，請耐心等候，謝謝!!");
	           document.paymentfrm.submit();
		   }
       //-->
        </script>   
        <?php
			if ($pay_type == "0" ||$pay_type == "1") {
        ?>
            <script>
			    seaFuncTypecust1();
			</script>
        <?php
			}
        ?> 
        
        <?php
		//玉山
		//$NOWURL = "https://acqtest.esunbank.com.tw/ACQTrans/esuncard/txnf014s";
        $NOWURL = "https://acq.esunbank.com.tw/ACQTrans/esuncard/txnf014s";

        $MID = "8080579837";

        $M = "0JXSMX1XVXJ5FYWVVYMLXZAR2RXSRNVE";

        $U = "http://www.mrsesame.com.tw/repayaction2.php";
		
		$data = '{"ONO":"'.$MerchantTradeNo.'","U":"http://www.mrsesame.com.tw/repayaction2.php","MID":"'.$MID.'","TA":"'.$alltotal.'","TID":"EC000001"}';
		$macstr = $data . $M;
		$mac = hash('sha256', $macstr);
		$ksn = "1";
		
		?>
		<form name="payform2" action="<?=$NOWURL?>" method="POST">
		    <input type='hidden' name='data' value='<?=$data?>' >
		    <input type='hidden' name='mac' value='<?=$mac?>' >
		    <input type='hidden' name='ksn' value='<?=$ksn?>' >
		</form>
		<SCRIPT LANGUAGE="JavaScript">
		<!--
	       function seaFuncTypecust2() {
		       alert("請按下確認鍵開始線上金流授權，這將花費您幾秒鐘的時間，請耐心等候，謝謝!!");
	           document.payform2.submit();
		   }
		//-->
		</script>
        <?php
			if ($pay_type == "3") {
        ?>
            <script>
			    seaFuncTypecust2();
			</script>
        <?php
			}
        ?> 
		<?php

		/*
		$db_host = "localhost";		
		$db_port = "3306";			
		$db_user = "sk732_user";  
		$db_pass = "@sGcu5T4X_WV"; 
		$db_name = "sk732_db";  
		
		$link = mysql_connect($db_host.":".$db_port,$db_user,$db_pass);
		mysql_select_db($db_name,$link);
		mysql_query("SET NAMES 'utf8'");
		
		
		$SQL= "select * from `order` where no = '".$no."' ";
        $result1 = mysql_query($SQL,$link);
		$row1=mysql_fetch_object($result1);

		$HashKey = "ARJe0HmXSMq4xXLTU9tWI2iMPt4jCQ6c";
		$HashIV = "HQqHyNFrA5v83g1X";
		
		$timestr = time();
		
        $mer_array = array(
            'MerchantID' => "37206449",
            'TimeStamp' => $timestr,
            'MerchantOrderNo' => $row1->no,
            'Version' => '1.2',
            'Amt' => $row1->alltotal,
            );

        ksort($mer_array);
        $check_merstr = http_build_query($mer_array);
        $CheckValue_str = "HashKey=ARJe0HmXSMq4xXLTU9tWI2iMPt4jCQ6c&$check_merstr&HashIV=HQqHyNFrA5v83g1X";
		$CheckValue = strtoupper(hash("sha256", $CheckValue_str));
		?>
       <form name="paymentfrm" action="https://api.pay2go.com/MPG/mpg_gateway" method="post">
          <input type="hidden" name="MerchantID" value="37206449" >
          <input type="hidden" name="RespondType" value="String" >
          <input type="hidden" name="CheckValue" value="<?=$CheckValue?>" >
          <input type="hidden" name="TimeStamp" value="<?=$timestr?>" >
          <input type="hidden" name="LoginType" value="0" >
          <input type="hidden" name="Version" value="1.2" >
          <input type="hidden" name="LangType" value="zh-tw" >
          <input type="hidden" name="MerchantOrderNo" value="<?=$row1->no?>" >
          <input type="hidden" name="Amt" value="<?=$row1->alltotal?>" >
          <input type="hidden" name="ItemDesc" value="芝麻先生線上購物" >
          <input type='hidden' name='ReturnURL' value='<?=base_url() ?>order/pay_feedback'/>
          <?
		  ///		  
          <input type="hidden" name="ReturnURL" value="http://www.sesamum.odin-eye.com/" >
          <input type="hidden" name="NotifyURL" value="http://www.sesamum.odin-eye.com/repayaction.php" >
		  //
		  ?>
          <input type="hidden" name="CREDIT" value="1" >
          <input type="hidden" name="WEBATM" value="1" >
          <input type="hidden" name="VACC" value="1" >
          <input type="hidden" name="CVS" value="1" >
          <input type="hidden" name="BARCODE" value="1" >
       </form>
		  <?
		  if ($row1->pay_type == "1") {
		  ?>
        <SCRIPT LANGUAGE="JavaScript">
       <!--
	       alert("請按下確認鍵開始線上金流授權，這將花費您幾秒鐘的時間，請耐心等候，謝謝!!");
	       document.paymentfrm.submit();
       //-->
        </script>
          <?
		  }
		  */
		  ?>
		<!-- CONTAINER -->
		<div class="container" style="padding: 30px;">
			<h1>訂購完成</h1>
			<div class="content_wrap">
				<div>感謝您的訂購，訂單已經成功建立，我們會儘快為您處理</div>
				<div>以下是您的訂購資料！</div>
				<div><a href="<?=base_url() ?>order/detail/<?=$id ?>">訂單編號：<?=$no ?></a></div>
				<!--div>付款方式：<?=get_pay_type_text($pay_type) ?></div-->
				<div>可至會員中心訂單查詢查看詳細資訊。</div>
			</div>
			<div class="gap"></div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.wrapper -->
        
<?php include('common/footer_view.php'); ?>
