<?php

$merchant_id         = $_POST['merchant_id'];
$order_id             = $_POST['order_id'];
$payhere_amount     = $_POST['payhere_amount'];
$payhere_currency    = $_POST['payhere_currency'];
$status_code         = $_POST['status_code'];

if ($status_code == 2 ){
        //TODO: Update  database as payment success
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");

        require_once 'php/conn.php';

        $regestration_number = $order_id;

        $query = "UPDATE user SET status='2' WHERE regestration_number='$regestration_number'";

        if ($conn->query($query) === TRUE) {
                echo "Record ".$regestration_number." updated successfully";
            } else {
                echo "Error - ".$regestration_number." updating record: " . $conn->error;
            }

        $query1 = "INSERT INTO payment (timestamp, type, regestration_number) VALUES ('$date', 'Annual', $regestration_number)";

        if ($conn->query($query1) === TRUE) {
                echo "<br> Record ".$regestration_number." inserted successfully";
            } else {
                echo "<br> Error - ".$regestration_number." inserting record: " . $conn->error;
            }
            
        $conn->close();         
        
}

?>