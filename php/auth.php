<?php
session_start();
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) { 
    $data['status'] = 201;
    echo json_encode($data); 
}
else{
    $data['status'] = 601;
    echo json_encode($data); 
}

?>