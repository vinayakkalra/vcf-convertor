<?php
require_once 'link.php';

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}

if(isset($_POST['email'])){
    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $email = mysqli_real_escape_string($link, $_POST['email']) ;
    $password = mysqli_real_escape_string($link, $_POST['password']) ;
    $mobile = mysqli_real_escape_string($link, $_POST['mobile']) ;
    $hashed_password = hash("sha512", $password);

/* ------------------------------ otp generate ------------------------------ */
        $user_activation_code = md5(rand());
        $user_otp = rand(100000, 999999);
        $user_email_status=	'not verified';
/* ---------------------------- otp generate end ---------------------------- */

    if($mobile == ""){
        $mobile = 0;
    }
    $id = 0;
    $result = mysqli_query($link, "SELECT max(id) FROM `signup-details`");
    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;
    // echo $query;
    $result1 = mysqli_query($link, "SELECT * FROM `signup-details` WHERE `email` = '$email'");
    $result2 = mysqli_query($link, "SELECT * FROM `signup-details` WHERE `mobile` = '$mobile'");
    if (mysqli_num_rows($result1) !=0 ) { 
        $data['status'] = 301;
        $data['error'] = 'This Email ID is already registered';
        echo json_encode($data);
    } else if (mysqli_num_rows($result2) !=0 ) { 
        $data['status'] = 302;
        $data['error'] = 'This Phone Number is already registered.';
        echo json_encode($data);
    }    
    else{
        $query = "INSERT INTO `signup-details`(`id`,`email`,`mobile`,`password`,`user_activation_code`,`user_otp`,`user_email_status`,`time`,`from_ip`,`from_browser`) VALUES ($id,'$email','$mobile','$hashed_password','$user_activation_code','$user_otp','$user_email_status','$date_now','$from_ip', '$from_browser')";
        if($result = mysqli_query($link, $query)) { 

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

                $data['status'] = 201;
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
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 
    }
}
?>