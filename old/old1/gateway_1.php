<?php
include 'classes/gateway.php';
include_once 'classes/action.php';

$request = $_REQUEST['request'];

$gateway = new Gateway();
$gateway->dealFlop();
echo 'Request: ' . $request;
?>
 