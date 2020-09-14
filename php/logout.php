<?php
session_start();
if(isset($_POST['logout_var'])){ 
session_unset();
session_destroy();
$host  = $_SERVER['HTTP_HOST'];
$Data_link = "http://$host/vcf-convertor/";
$data['status'] = 201;
$data['url']=$Data_link;
echo json_encode($data);
exit();
}
?>