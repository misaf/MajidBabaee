<?php
require_once('nusoap.php');
$soapclient = new soapclient('https://acquirer.samanepay.com/payments/referencepayment.asmx?WSDL','wsdl');
$soapProxy = $soapclient->getProxy() ;
$res=$soapProxy->VerifyTransaction("1","10062014");#reference number and sellerid
echo var_dump($res);
echo"<br>";
echo var_dump($soapProxy);
echo"<br>";
echo var_dump($soapclient);
?>
