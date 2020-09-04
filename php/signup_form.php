<?php
session_start();
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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];  
   
    if($mobile == ""){
        $mobile = 0;
    }

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `signup-details`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;


    $query = "INSERT INTO `signup-details`(`id`,`email`,`mobile`,`password`,`time`,`from_ip`,`from_browser`) VALUES ($id,'$email','$mobile','$password','$date_now','$from_ip', '$from_browser')";

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {
      
    $data['status'] = 201;
        $data['id'] = $id;
        $data['email']=$email;
        echo json_encode($data);
        // $_SESSION['authenticated']=true;
    }  
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

}
?>