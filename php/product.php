<?php
  session_start();
require_once 'link.php';

if(isset($_POST['user_id'])){

    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $user_id = mysqli_real_escape_string($link, $_POST['user_id']) ; 
    $product_name = mysqli_real_escape_string($link, $_POST['product_name']) ;  
    $result = mysqli_query($link, "SELECT * FROM `product_details` WHERE `customer_id` = '$user_id'");
    if(mysqli_num_rows($result) !=0 ){
        $query = "UPDATE `product_details` SET `product_name`='$product_name',`time`= '$date_now',`from_ip`='$from_ip',`from_browser`='$from_browser' WHERE `customer_id`=$user_id";
    
        if($result = mysqli_query($link, $query)) {   
    $data['status'] = 201;
        $data['id'] = $user_id;
        $data['product_name']=$product_name;
        echo json_encode($data);   
        }
        else{
            $data['status'] = 601;
            $data['error'] = $link -> error;
            echo json_encode($data);
        }
    }
    else{
        $query = "INSERT INTO `product_details`(`customer_id`,`product_name`,`time`,`from_ip`,`from_browser`) VALUES ($user_id,'$product_name','$date_now','$from_ip', '$from_browser')";
    
        if($result = mysqli_query($link, $query)) {   
    $data['status'] = 201;
        $data['id'] = $user_id;
        $data['product_name']=$product_name;
        echo json_encode($data);   
        }
        else{
            $data['status'] = 601;
            $data['error'] = $link -> error;
            echo json_encode($data);
        }
    }
  
   

}


?>