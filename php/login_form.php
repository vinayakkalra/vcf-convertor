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
    $result = mysqli_query($link, "SELECT * FROM `signup-details` WHERE `email` = '$email' AND `password` = '$hashed_password' ");

    if (mysqli_num_rows($result) !=0 ) {
        $row=mysqli_fetch_array($result);        
			
                $data['status'] = 201;
                $data['email']=$email;
                $data['id']= $row['id']; 
                session_start();
                $_SESSION['first_char']=ucfirst($email[0]);
                $_SESSION['user_email']=$email;
                $_SESSION['array_name']="";
                //  $_SESSION['user_name'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];
                echo json_encode($data); 
                }
    else { 
        $data['status'] = 301;
        $data['error'] = 'Invalid Email or Password';
        echo json_encode($data);
    }

}


?>