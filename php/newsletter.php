
<?php
require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';
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

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `newsletter`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;
    $result1 = mysqli_query($link, "SELECT * FROM `newsletter` WHERE `email` = '$email'");
    if (mysqli_num_rows($result1) !=0 ) { 
        $data['status'] = 301;
        $data['error'] = 'This Email ID is already registered';
        echo json_encode($data);
    }else{
        $query = "INSERT INTO `newsletter`(`id`, `email`, `time`, `from_ip`, `from_browser`) VALUES ($id,'$email','$date_now','$from_ip', '$from_browser')";

        // echo $query;
        
        if($result = mysqli_query($link, $query))  
        {
        $err = array();

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();  
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->SMTPAutoTLS = false;
        $mail->Port = 25;
        $mail->From = 'support@quadtech.com';
        $mail->FromName = "VCF Converter";	 // name is optional
        $mail->AddAddress($email);     
        $mail->AddReplyTo("info@quadtech.com", "Newsletter | VCF Converter");

        $mail->WordWrap = 50;  // set word wrap to 50 characters
        $mail->IsHTML(true); // set email format to HTML

        $mail->Subject = 'Thanks for signing up our newsletter';
        $message_body = '<p>Thank you for subscribing our newsletter. You can get here our latest product details and pricing news</p>
			<p>Sincerely,</p>';
        $mail->Body    = $message_body;
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

        if($mail->Send()) {

            $data['status'] = 201;   
            $data['error'] = 'Thank you !';      
            echo json_encode($data);	
    }
    else{
        $data['error'] = $mail->ErrorInfo;
    }
        
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
