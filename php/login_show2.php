<?php
  session_start();
$data = array(); 
if(isset($_SESSION["user_email"])){ 
  echo'<a class="nav-link btn_active pop_up_logout_header" href="#"
  style="background: #e0e0e0;margin-left: 1rem;">Logout</a>';  
  
}else{    
  echo'<a class="nav-link btn_active pop_up_login_header"  style="background: #e0e0e0;margin-left: 1rem;">Login</a>';
}
?>