    /**
  **************************************************************************************************
  **********  CLPHP����ϵͳ2015 WEB��ٷ���ʽ��  *****  �ٷ����� *** ��Ȩ���� *** ����ؾ�  **********
  **********------------------------------------------------------------------------------**********
  * �ٷ���վ��http://www.chunleinet.com/ �ٷ����̣�http://jxlcl.taobao.com/  *  �ٷ���������:chunlei2615 ����׼�ٹ��� *
  **************************************************************************************************
*/

var speeds=80;

var clfahuo=document.getElementById('clfahuo');

var clfahuo1=document.getElementById('clfahuo1');

var clfahuo2=document.getElementById('clfahuo2');

clfahuo2.innerHTML=clfahuo1.innerHTML

function Marquee1(){

	if(clfahuo2.offsetHeight-clfahuo.scrollTop<=0)

	clfahuo.scrollTop-=clfahuo1.offsetHeight

	else{

		clfahuo.scrollTop++

	}

}

var MyMar1=setInterval(Marquee1,speeds)

clfahuo.onmouseover=function(){

	clearInterval(MyMar1)

}

clfahuo.onmouseout=function(){

	MyMar1=setInterval(Marquee1,speeds)

}

/*//////////////////////////// WFORDERJSEND ////////////////////////////*/