<?php
/**
  **************************************************************************************************
  **********  CLPHP����ϵͳ2015 WAP��ٷ���ʽ��  *****  �ٷ����� *** ��Ȩ���� *** ����ؾ�  **********
  **********------------------------------------------------------------------------------**********
  ****** �ٷ���վ��http://jxlcl.taobao.com/  *****  �ٷ���������:chunlei2615 ����׼���˹��� ********
  **************************************************************************************************
  **********------------------------------------------------------------------------------**********
  **********  CLPHP����ϵͳ2015 WAP��ٷ���ʽ����ȫ��Դ���κμ��� �ž����� ���Ӽ��ܵ�����   **********
  **************************************************************************************************
 */
 
session_start();
require_once 'public/bdnet.php';
date_default_timezone_set('Asia/Shanghai');

$mail->Subject = "�������".$out_trade_no."��".$bdname."-".$bdmob."���¶���������ע�⣡";
$mail->Body = "
<p style='height:40px;line-height:40px;font-size:28px;font-weight:bold;color:#bd0a01'>".$FromName."��������</p>
<p>��������š���<font color='#BD0000'>".$out_trade_no."</font></p>";
if(!empty($_POST['bdproduct'])){$mail->Body .= '<p>��������Ʒ����'.$bdproduct.'</p>';}
if(!empty($_POST['bdproductb'])){$mail->Body .= '<p>����Ʒ�ͺš���'.$bdproductb.'</p>';}
if(!empty($_POST['bdmun'])){$mail->Body .= '<p>������ / �۸񡿣�'.$bdnum.' / '.$bdprice.'</p>';}
if(!empty($_POST['bdname'])){$mail->Body .= '<p>���ռ�����������'.$bdname.'</p>';}
if(!empty($_POST['bdmob'])){$mail->Body .= '<p>���ֻ����롿��'.$bdmob.'</p>';}
if(!empty($_POST['bdtel'])){$mail->Body .= '<p>���绰���롿��'.$bdtel.'</p>';}
if(!empty($_POST['bdprovince'])){$mail->Body .= '<p>�����ڵ�������'.$bdprovince.$bdcity.$bdarea.'</p>';}
if(!empty($_POST['bdaddress'])){$mail->Body .= '<p>����ϸ��ַ����'.$bdaddress.'</p>';}
if(!empty($_POST['bdpost'])){$mail->Body .= '<p>���������롿��'.$bdpost.'</p>';}
if(!empty($_POST['bdqq'])){$mail->Body .= '<p>��QQ���롿��'.$bdqq.'</p>';}
if(!empty($_POST['bdemail'])){$mail->Body .= '<p>���������䡿��'.$bdemail.'</p>';}
if(!empty($_POST['bdpay'])){$mail->Body .= '<p>�����ʽ����'.$bdpay.'</p>';}
if(!empty($_POST['bdguest'])){$mail->Body .= '<p>���˿����ԡ���'.$bdguest.'</p>';}
$mail->Body .="
<P>����·ҳ�桿��".$referer."</P>
<P>���µ�ҳ�桿��".$purl."</P>
<P>���µ�IP����<a href='http://www.baidu.com/s?wd=".$_SERVER['REMOTE_ADDR']."'>".$_SERVER['REMOTE_ADDR']."</a></P>
</div>";

if(empty($_POST['bdname'])||empty($_POST['bdmob'])){
    echo "<p style='font-size:12px;color:#BD0000;'>������ʾ��CLPHP����ϵͳ2015��ʾ�����յ��������ύ��<a href='"."$_SERVER[HTTP_REFERER]"."'>>����������д!>>></a></p>";
    exit(0);
}
if (isset($_SESSION["post_sep"])){
    if (time() - $_SESSION["post_sep"] < $allow_sep){
	    exit("<script>alert('$sepmsg');javascript:history.go(-1);</script>");
	}
	else{
	    $_SESSION["post_sep"] = time();
	} 
} 
else{
    $_SESSION["post_sep"] = time(); 
}
if(!$mail->Send()){
	
	if($clwrite=="on"){

		$f = fopen($cldatadir,"a");
		fwrite($f,$cldata);
		fclose($f);
		}
    echo 'CLPHP����ϵͳ2015������ʾ��:�ʼ�����ʧ�ܣ����ģ����ύ������Ϣû�ж�ʧ����д�������ļ��С�����������ʾվ���������������������ų��ʼ�����ʧ��ԭ�򣺵�һ�����bdconfig.php�����ļ��з������ַ������SMTP��������ַ���������¼����(������뿪���ͻ�����Ȩ������ܿ���POP3�����163������Ϊ�����䣬����Ҫ����¼����ĳɿͻ�����Ȩ���룩�Ƿ���ȷ���úã��ڶ���������ķ������Ƿ���pop3���񣻵��������ռ��Ƿ����SMTP��fsockopen��pfsockopen��stream_socket_client������������Ҫ��һ����';
}

/**
  **************************************************************************************************
  **********  ��ܰ��ʾ��Ʒ���־�����̲ź�  ********  �ٷ���������:chunlei2615 ����׼���˹���  **********
  **************************************************************************************************
*/

elseif($bdpay=="alipay"){
	$url="public/bd_alipay.php?payAmount=".$bdzfbjg."&bdproduct=".urlencode($bdproduct)."&bdname=".urlencode($bdname)."&bdmob=".urlencode($bdmob)."&out_trade_no=".urlencode($out_trade_no);
	//echo $url;
	Header("Location:$url"); 
    exit;
}
else{
header("location:./public/bdddok.php?out_trade_no=$out_trade_no&bdproduct=$bdproduct&bdname=$bdname&bdmob=$bdmob&bdprovince=$bdprovince&bdcity=$bdcity&bdarea=$bdarea&bdaddress=$bdaddress&bdpay=$bdpay");
    exit;
}
?>