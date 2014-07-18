<?php
require_once('nusoap.php');
$soapclient = new soapclient('https://acquirer.samanepay.com/payments/referencepayment.asmx?WSDL','wsdl');
$soapProxy = $soapclient->getProxy() ;
$res=  $soapProxy->ReverseTransaction("1","10062014","4579342","10000");#reference number,sellerid,password,reverse amount
if( $res == 1 )
	echo 'reversed successfully' ;
else
	echo 'reversed failed' ;
?>
