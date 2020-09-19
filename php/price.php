<?php
session_start();
require_once 'link.php';
$data=array();
$result = mysqli_query($link, "SELECT * FROM `price_table`");
if(mysqli_num_rows($result)!=0){
$row=mysqli_fetch_array($result);
$data['status'] = 201;
$data['price_pro']=$row['pro'];
$data['price_enterprise']=$row['enterprise'];
echo json_encode($data);
}else{
    $data['status'] = 601;
    echo json_encode($data);
}
?>