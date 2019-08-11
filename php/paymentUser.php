<?php

    require_once 'conn.php';

    if( isset($_POST['method']) == 1)
    {
        $Reg_ID = $_POST['rid'];

        $return_arr = array();

        $query = "SELECT * FROM member WHERE regestration_number='$Reg_ID'";

        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result)!=0) {

            while($row = mysqli_fetch_array($result)){
                $name = $row['name'];
                $address = $row['address'];
                $mobile_number = $row['mobile_number'];
                $email_address = $row['email_address'];
            }

            $return_arr[] = array("name" => $name,
                    "address" => $address,
                    "mobile_number" => $mobile_number,
                    "email_address" => $email_address);

            echo json_encode($return_arr);

        }
        else{
            echo "null";
        }

    }
?>