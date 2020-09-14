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
        $query = "INSERT INTO `signup-details`(`id`,`email`,`mobile`,`password`,`time`,`from_ip`,`from_browser`) VALUES ($id,'$email','$mobile','$hashed_password','$date_now','$from_ip', '$from_browser')";
        if($result = mysqli_query($link, $query)) {   
    $data['status'] = 201;
        $data['id'] = $id;
        $data['email']=$email;        
        echo json_encode($data);
        session_start();
        $_SESSION['first_char']=ucfirst($email[0]);
        $_SESSION['user_email']=$email;
        $_SESSION['array_name']="";
        $_SESSION['authenticated']=true;
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