<?php
session_start();
require_once 'link.php';
$user_mail=$_SESSION['user_email'];
if(isset($_POST['num_end'])) { 
    $row_end=$_POST['num_end']; 
    echo $row_end;   
    $result = mysqli_query($link, "SELECT `subscription` FROM `signup-details` WHERE `email`='$user_mail'");
    $row=mysqli_fetch_array($result);
    if($row['subscription']==""){
        $data['num_end']=5;
        $data['status'] = 201;
        echo json_encode($data);
    }
    else{
        $data['num_end']=$row_end;
        $data['status'] = 301;
        echo json_encode($data);
    }
     
}
else{   
    $data['status'] = 601;
    echo json_encode($data); 
}

?>