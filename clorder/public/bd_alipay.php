<?php
	require_once("../bdconfig.php");
	$optEmail = $bdzhifubao;
	$payAmount = $_GET['payAmount'];
	$title =  $_GET['bdproduct'];
	$memo = "姓名：".$_GET['bdname'].",手机：".$_GET['bdmob']."，订单编号：".$_GET['out_trade_no'];
	$isSend = $alipay_isSend;
	$smsNo = $alipay_smsNo;
?>
<html>
<head>
<meta charset="gb2312">
<title>正在跳转到支付页面...</title>
</head>

<body>
<form id="alipaysubmit" name="alipaysubmit" action="https://shenghuo.alipay.com/send/payment/fill.htm" method="POST">
  <input type="hidden" name="optEmail" value="<?php echo $optEmail ?>"/>
  <input type="hidden" name="payAmount" value="<?php echo $payAmount ?>"/>
  <input type="hidden" name="title" value="<?php echo $title ?>"/>
  <input type="hidden" name="memo" value="<?php echo $memo ?>"/>
  <input type="hidden" name="isSend" value="<?php echo $isSend ?>"/>
  <input type="hidden" name="smsNo" value="<?php echo $smsNo ?>"/>
  <!--<input type="hidden" value="submit" value="正在为您跳转到支付宝付款页面,如未自动转接请点击...">-->
  <input type="hidden" value="submit"  >
</form>
<script type="text/javascript">
   document.forms['alipaysubmit'].submit();
</script>
</body>
</html>
