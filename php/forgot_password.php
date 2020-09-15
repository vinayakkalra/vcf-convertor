<?php

require_once 'link.php';

if(isset($_POST['email'])){

    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $mobile = mysqli_real_escape_string($link, $_POST['mobile']) ;
    $email = mysqli_real_escape_string($link, $_POST['email']) ;
    $password = mysqli_real_escape_string($link, $_POST['password']) ;
    $hashed_password = hash("sha512", $password);

    $result = mysqli_query($link, "SELECT * FROM `signup-details` WHERE `email` = '$email' AND `mobile` = '$mobile'");
    if (mysqli_num_rows($result) ==0 ) { 
        $data['status'] = 301;
        $data['error'] = 'Invalid Registered Email or Phone number.';
        echo json_encode($data);
    } else{
        // $query = "UPDATE `signup-details` SET `password` = '$hashed_password', `time` = '$date_now', `from_ip` = '$from_ip', `from_browser` = '$from_browser' WHERE `email` = '$email' AND `phone` = '$phone'";
        $query = "UPDATE `signup-details` SET `password` = '$hashed_password' WHERE `email` = '$email' AND `mobile` = '$mobile'";

        // echo $query;
        
        if($result = mysqli_query($link, $query))
        {  
            $data['success'] = 'Password change successfully';
            $data['status'] = 201;
            echo json_encode($data);
        }  
        else  
        {  
            $data['status'] = 601;
            $data['error'] = $link -> error;
            echo json_encode($data);
        }
    }
}
?>