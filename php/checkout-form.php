<?php

require_once 'link.php';

if(isset($_POST['type']) == '50'){

    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $name = mysqli_real_escape_string($link, $_POST['name']) ;
    $phone = mysqli_real_escape_string($link,$_POST['phone']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $address = mysqli_real_escape_string($link,$_POST['address']);
    $eventname= mysqli_real_escape_string($link,$_POST['eventname']);
    $amount = mysqli_real_escape_string($link,$_POST['amount']);
    
    // $password = mysqli_real_escape_string($link, $_POST['password']);
    // $hashed_password = hash("sha512", $password);

    if($phone == ""){
        $phone = 0;
    }
    if($amount == ""){
        $amount = 0;
    }

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `orders_event_razorpay`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;
        
    $query = "INSERT INTO `orders_event_razorpay` (`id`, `name`, `phone`, `email`, `address`,`eventname`, `amount`,`date_now`, `from_ip`, `from_browser`, `status`) VALUES ('$id','$name', '$phone', '$email','$address','$eventname', '$amount','$date_now','$from_ip', '$from_browser','processing')";
    
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
}else if(isset($_POST['type']) == '100'){
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $name = mysqli_real_escape_string($link, $_POST['name']) ;
    $phone = mysqli_real_escape_string($link,$_POST['phone']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $address = mysqli_real_escape_string($link,$_POST['address']);
    $eventname= mysqli_real_escape_string($link,$_POST['eventname']);
    $amount = mysqli_real_escape_string($link,$_POST['amount']);
    
    // $password = mysqli_real_escape_string($link, $_POST['password']);
    // $hashed_password = hash("sha512", $password);

    if($phone == ""){
        $phone = 0;
    }
    if($amount == ""){
        $amount = 0;
    }

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `orders_event_razorpay`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;
        
    $query = "INSERT INTO `orders_event_razorpay` (`id`, `name`, `phone`, `email`, `address`,`eventname`, `amount`,`date_now`, `from_ip`, `from_browser`, `status`) VALUES ('$id','$name', '$phone', '$email','$address','$eventname', '$amount','$date_now','$from_ip', '$from_browser','processing')";
    
    // echo $query;
    
    if($result = mysqli_query($link, $query)) {  
        $data['status'] = 201;
        $data['id'] = $id;
        echo json_encode($data);
    }else{  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    }
}
    
?>
