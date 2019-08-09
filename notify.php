<?php

$merchant_id         = $_POST['merchant_id'];
$order_id             = $_POST['order_id'];
$payhere_amount     = $_POST['payhere_amount'];
$payhere_currency    = $_POST['payhere_currency'];
$status_code         = $_POST['status_code'];

if ($status_code == 2 ){
        //TODO: Update  database as payment success
        echo $merchant_id;
        echo $order_id;
        echo $payhere_amount;
        echo $merchant_id;

}

?>