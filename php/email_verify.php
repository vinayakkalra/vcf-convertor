<?php
session_start();
require_once 'link.php';
$user_activation_code="";
if(isset($_POST['email'])){
    $data = array(); 
    $user_activation_code = $_SESSION['user_activation_code'];
    $user_otp = $_POST['otp_row'];
		
        $query = "
        SELECT * FROM `signup-details` 
        WHERE user_activation_code = '".$user_activation_code."' 
        AND user_otp = '".trim($_POST["otp_row"])."'
        ";

        $statement = $connect->prepare($query);

        $statement->execute();

        $total_row = $statement->rowCount();

        if($total_row > 0)
        {
            $query = "
            UPDATE `signup-details` 
            SET user_email_status = 'verified' 
            WHERE user_activation_code = '".$user_activation_code."'
            ";

            $statement = $link->prepare($query);

            if($statement->execute())
            {
                data['status']=201;
                echo json_encode(data);
            }
        }
        else
        {
            data['status']=601;
            data['error'] = 'Invalid OTP Number';
        }
}
?>
