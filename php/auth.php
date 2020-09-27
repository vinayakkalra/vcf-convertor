<?php
session_start();
require_once 'link.php';
$data=array();
if(isset($_SESSION['user_email'])) {     
    $user_email=$_SESSION['user_email'];
    $user_mobile=$_SESSION['user_mobile'];
    $result1 = mysqli_query($link, "SELECT `user_email_status` FROM `signup-details` WHERE `email`='$user_email'");
    if(mysqli_num_rows($result1)!=0){
    $row1=mysqli_fetch_array($result1);
    if($row1['user_email_status']=='verified'){      
    $result = mysqli_query($link, "SELECT `subscription` FROM `signup-details` WHERE `email`='$user_email'");
    if(mysqli_num_rows($result)!=0){
        $row=mysqli_fetch_array($result);
        if($row['subscription']!=""){
        $data['status'] = 201;
        $data['mobile']=$user_mobile;
        $data['email']=$user_email;
        $_SESSION['user']="Paid_User";
        echo json_encode($data); 
        }else{
            $data['row_end']=5;
            $data['status'] = 301;
            $data['mobile']=$user_mobile;
            $data['email']=$user_email;
            echo json_encode($data); 
            
        }
    } 
    }else{
        $data['status'] = 701;
        $data['row_end']=5;
        $data['Welcome'] = 'Unverified User';
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