<?php
date_default_timezone_set('Asia/Shanghai');
/**
  **************************************************************************************************
  **********  PHP订单系统2015 WAP版官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  * 官方网站：http://www.chunleinet.com/ 官方店铺：http://jxlcl.taobao.com/  *  官方店铺旺旺:chunlei2615 请认准再购买 *
  **************************************************************************************************
*/
/**************************   网站基本设置   **************************/

$FromName = '《养猪技术大全》正版销售网站';  // 网站名称
$allow_sep = '60';  // 10秒内不能重复提交订单，防恶意刷单
$sepmsg = '对不起！您已经提交过，不要重复提交，请等待'.$allow_sep .'秒后再试！';  // 重复提交后弹出的提示语

/**************************   订单发送设置 发件箱必须开通pop3服务   **************************/

$MailFrom = 'lsl1390684187@163.com';  // 设置一个用来发送订单信息的邮箱，需开启SMTP服务
$Mailhost = 'smtp.163.com';  // 邮箱SMTP服务器地址 【163邮箱（smtp.163.com）、qq邮箱（smtp.qq.com）】
$MailUsername = 'lsl1390684187@163.com';  // 邮箱登陆帐号 【如果是163邮箱需填写整个邮箱地址，如果是qq邮箱只需填写qq号】
$MailPassword = 'lsl1390684187';  // 邮箱登陆密码【如果必须开启客户端授权密码才能开启163邮箱的POP3服务的话，则需要将此密码改为客户端授权密码】


/**************************   订单接收设置   **************************/

$MailTo = '503700638@qq.com';  // 设置接收订单信息的邮箱 【注意：不能与上面设置的发送订单信息的邮箱相同】
$MailTob = '503700638@qq.com';  // 设置接收订单信息的邮箱 【设置一个手机号邮箱即可实现手机短信接收订单信息】

///////////////////////////////////////// 应对个人接口困难开发的生活支付 /////////////////////////////////////////

