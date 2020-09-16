<?php

require_once 'link.php';

if(isset($_POST['email'])){

    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $email = mysqli_real_escape_string($link, $_POST['email']) ;
    $password = mysqli_real_escape_string($link, $_POST['password']) ;
    $hashed_password = hash("sha512", $password);
    /* ------------------------------ otp generate ------------------------------ */
    $user_activation_code = md5(rand());
    $user_otp = rand(100000, 999999);
/* ---------------------------- otp generate end ---------------------------- */
    $result = mysqli_query($link, "SELECT * FROM `signup-details` WHERE `email` = '$email' AND `password` = '$hashed_password' ");

    if (mysqli_num_rows($result) !=0 ) {
        $row=mysqli_fetch_array($result);        
            if($row['user_email_status']=="verified")
            {
                $data['status'] = 201;
                $data['email']=$email;
                $data['id']= $row['id']; 
                session_start();
                $_SESSION['first_char']=ucfirst($email[0]);
                $_SESSION['user_email']=$email;
                $_SESSION['authenticated']=true;               
                //  $_SESSION['user_name'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];
                echo json_encode($data); 
                }
            }else{
            // $query = "INSERT INTO `signup-details`(`user_activation_code`,`user_otp`) VALUES ('$user_activation_code','$user_otp')";
            $query = "UPDATE `signup-details` SET `user_activation_code` = '$user_activation_code' `user_otp`='$user_otp' WHERE `email` ='$email'";
            $statement = $link->prepare($query);

            if($statement->execute())
            {
/* ---------------------- email send to user given email id --------------------- */
            require 'class.phpmailer.php';
			$mail = new PHPMailer;
			$mail->IsSMTP();
			$mail->Host = 'smtpout.secureserver.net';
			$mail->Port = '80';
			$mail->SMTPAuth = true;
			$mail->Username = 'xxxxxxxx';
			$mail->Password = 'xxxxxxxx';
			$mail->SMTPSecure = '';
			$mail->From = 'chandan.mca.2019@gmail.com';
			$mail->FromName = 'VCF Converter';
			$mail->AddAddress($email);
			$mail->WordWrap = 50;
			$mail->IsHTML(true);
			$mail->Subject = 'Verification code for Verify Your Email Address';

			$message_body = '
			<p>For verify your email address, enter this verification code when prompted: <b>'.$user_otp.'</b>.</p>
			<p>Sincerely,</p>
			';
			$mail->Body = $message_body;

			if($mail->Send())
			{

                $data['status'] = 601;
                $data['error'] = 'User not verified';
                $data['id'] = $id;
                $data['email']=$email;        
                echo json_encode($data);
                session_start();        
                $_SESSION['first_char']=ucfirst($email[0]);
                $_SESSION['user_email']=$email;      
                $_SESSION['authenticated']=true;
                $_SESSION['user_activation_code']=$user_activation_code;				
			}
			else
			{
				$data['error'] = $mail->ErrorInfo;
            }
/* ---------------------- email send to user given email id end--------------------- */
    }
    else { 
        $data['status'] = 301;
        $data['error'] = 'Invalid Email or Password';
        echo json_encode($data);
    }

}
}

?>