<?php
	require_once("../bdconfig.php");
	$optEmail = $bdzhifubao;
	$payAmount = $_GET['payAmount'];
	$title =  $_GET['bdproduct'];
	$memo = "������".$_GET['bdname'].",�ֻ���".$_GET['bdmob']."��������ţ�".$_GET['out_trade_no'];
	$isSend = $alipay_isSend;
	$smsNo = $alipay_smsNo;
?>
<html>
<head>
<meta charset="gb2312">
<title>������ת��֧��ҳ��...</title>
</head>

<body>
<form id="alipaysubmit" name="alipaysubmit" action="https://shenghuo.alipay.com/send/payment/fill.htm" method="POST">
  <input type="hidden" name="optEmail" value="<?php echo $optEmail ?>"/>
  <input type="hidden" name="payAmount" value="<?php echo $payAmount ?>"/>
  <input type="hidden" name="title" value="<?php echo $title ?>"/>
  <input type="hidden" name="memo" value="<?php echo $memo ?>"/>
  <input type="hidden" name="isSend" value="<?php echo $isSend ?>"/>
  <input type="hidden" name="smsNo" value="<?php echo $smsNo ?>"/>
  <!--<input type="hidden" value="submit" value="����Ϊ����ת��֧��������ҳ��,��δ�Զ�ת������...">-->
  <input type="hidden" value="submit"  >
</form>
<script type="text/javascript">
   document.forms['alipaysubmit'].submit();
</script>
</body>
</html>
