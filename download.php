<?php
session_start();
$c=$_SESSION['array_name'];
$data=array();
if (!isset($_SESSION['authenticated']))
{
header('location:/');
exit;
}
else{
        $data['status']=201;
        $data['file']=$c;
        echo json_encode($data);
}
?>
