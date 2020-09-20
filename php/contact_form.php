<?php
require_once 'link.php';

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
if(isset($_POST['name'])){    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");    
    $name = $_POST['name'];   
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message = $_POST['message'];
    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `contact`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;


    $query = "INSERT INTO `contact`(`id`, `name`, `email`, `subject`, `message`,`time`, `from_ip`, `from_browser`) VALUES ($id, '$name', '$email', '$subject', '$message','$date_now','$from_ip', '$from_browser')";

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {        
    $data['status'] = 201;
        $data['id'] = $id;
        echo json_encode($data);
    }  
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

}else{
}
?>   