/**
  **************************************************************************************************
  **********  CLPHP����ϵͳ2015 WEB��ٷ���ʽ��  *****  �ٷ����� *** ��Ȩ���� *** ����ؾ�  **********
  **********------------------------------------------------------------------------------**********
  * �ٷ���վ��http://www.chunleinet.com/ �ٷ����̣�http://jxlcl.taobao.com/  *  �ٷ���������:chunlei2615 ����׼�ٹ��� *
  **************************************************************************************************
*/
var speeds=80;
var bdfahuo=document.getElementById('bdfahuo');
var bdfahuo1=document.getElementById('bdfahuo1');
var bdfahuo2=document.getElementById('bdfahuo2');
bdfahuo2.innerHTML=bdfahuo1.innerHTML
function Marquee1(){
	if(bdfahuo2.offsetHeight-bdfahuo.scrollTop<=0)
	bdfahuo.scrollTop-=bdfahuo1.offsetHeight
	else{
		bdfahuo.scrollTop++
	}
}
var MyMar1=setInterval(Marquee1,speeds)
bdfahuo.onmouseover=function(){
	clearInterval(MyMar1)
}
bdfahuo.onmouseout=function(){
	MyMar1=setInterval(Marquee1,speeds)
}
/*///////////////////////////////////////// BDORDERJSEND /////////////////////////////////////////*/