<?php
session_start();
require_once 'link.php';
if(isset($_SESSION['user_email'])) { 
    $data=array();
    $user_email=$_SESSION['user_email'];
    $user_mobile=$_SESSION['user_mobile'];
    $result = mysqli_query($link, "SELECT `subscription` FROM `signup-details` WHERE `email`='$user_email'");
    if(mysqli_num_rows($result)!=0){
        $row=mysqli_fetch_array($result);
        if($row['subscription']!=""){
        $data['status'] = 201;
        $data['mobile']=$user_mobile;
        $data['email']=$user_email;
        echo json_encode($data); 
        }else{
            $data['row_end']=5;
            $data['status'] = 301;
            $data['mobile']=$user_mobile;
            $data['email']=$user_email;
            echo json_encode($data); 
            
        }
    }    
}
else{
    $data['status'] = 601;
    $data['row_end']=5;
    $data['Welcome'] = 'New User';
    echo json_encode($data); 
}

?>