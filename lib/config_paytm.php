<?php
//Change the value of PAYTM_MERCHANT_KEY constant with details received from Paytm.
require_once("../inc/connection.php");

$sql = "select mkey from pay_gateway_setting WHERE active=1 and id!=1";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$raw = mysqli_fetch_assoc($result);
$KEY = $raw['mkey'];
define('PAYTM_MERCHANT_KEY',$KEY); 
?>
