<?php
  session_start();
$data = array(); 
if(isset($_SESSION["user_email"])){
  echo'<div style="margin-left: 1rem;" class="show_user_name" data-letters="'.$_SESSION['first_char'].'"></div>'; 
  
}else{    
  echo'<a class="nav-link btn_active pop_up_signup_header" href="#" style="background: #e0e0e0;margin-left: 1rem;">SignUp</a>';
  
}
?>