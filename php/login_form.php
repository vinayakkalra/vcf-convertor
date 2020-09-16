<?php
require_once 'link.php';
require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';
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
    $hashed_password = hash("sha512", $password);
    /* ------------------------------ otp generate ------------------------------ */
    $user_activation_code = md5(rand());
    $user_otp = rand(100000, 999999);
/* ---------------------------- otp generate end ---------------------------- */
    $query ="SELECT * FROM `signup-details` WHERE `email` = '$email' AND `password` = '$hashed_password'";
    $result = mysqli_query($link,$query);
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
            else{
            $query2 = "UPDATE `signup-details` SET `user_otp`='$user_otp' WHERE `email` ='$email'";
            if($result = mysqli_query($link, $query2))  
            {            
            /* ---------------------- email send to user given email id --------------------- */
            $err = array();

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->isSMTP();  
            $mail->Host = 'localhost';
            $mail->SMTPAuth = false;
            $mail->SMTPAutoTLS = false;
            $mail->Port = 25;
            $mail->From = 'chandan.mca.2019@gmail.com';
            $mail->FromName = "VCF Converter";	 // name is optional
            $mail->AddAddress($email);     
            $mail->AddReplyTo("sbitosbi@gmail.com", "OTP Verifiaction | VCF Converter");

            $mail->WordWrap = 50;  // set word wrap to 50 characters
            $mail->IsHTML(true); // set email format to HTML

            $mail->Subject = 'Verification code for Verify Your Email Address';
            $message_body = '<p>For verify your email address, enter this verification code when prompted: <b>'.$user_otp.'</b>.</p>
                <p>Sincerely,</p>';
            $mail->Body    = $message_body;
            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

            if($mail->Send()) {

                    $data['status'] = 601;
                    $data['email']=$email;        
                    echo json_encode($data);
                    session_start();        
                    $_SESSION['first_char']=ucfirst($email[0]);
                    $_SESSION['user_email']=$email;      
                    $_SESSION['authenticated']=true;
                    $_SESSION['user_activation_code']=$user_activation_code;	
            
            }
            else{
                $data['error'] = $mail->ErrorInfo;
            }
            /* ---------------------- email send to user given email id end--------------------- */
    }
    

}else { 
    $data['status'] = 301;
    $data['error'] = 'email or password not found';
    echo json_encode($data);
}
}
?>