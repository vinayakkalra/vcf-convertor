<?php
session_start();
if(isset($_POST['logout_var'])){ 
session_unset();
session_destroy();
$data['status'] = 201;
echo json_encode($data);
exit();
}
?>