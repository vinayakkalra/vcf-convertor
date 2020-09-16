<?php
session_start();
require_once 'link.php';
if(isset($_POST['email'])){
    $user_activation_code="";   
    $data = array(); 
    $email = mysqli_real_escape_string($link, $_POST['email']) ;
    $user_otp = mysqli_real_escape_string($link, $_POST['otp']);   		
        $query = "SELECT * FROM `signup-details` WHERE `email`= '$email' AND `user_otp`='$user_otp'";
        $result = mysqli_query($link,$query);
        if (mysqli_num_rows($result) !=0 ) {   
            $row=mysqli_fetch_array($result);         
            $query2 = "UPDATE `signup-details` SET user_email_status = 'verified' WHERE `email` = '$email'";
            if($result = mysqli_query($link, $query2))  
            {
                $data['status']=201;
                echo json_encode($data);
            }         
        }else
        {
            $data['status']=301;
            $data['error'] = 'Invalid OTP Number';
            echo json_encode($data);
        }
}
else{
    $data['status']=601;
    $data['error'] = 'Email not found';
    echo json_encode($data);
}
?>
