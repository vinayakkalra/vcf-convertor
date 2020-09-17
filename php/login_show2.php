<?php
  session_start();
  require_once 'link.php'; 
if(isset($_SESSION["user_email"])){ 
  $data = array();
  $email = mysqli_real_escape_string($link,$_SESSION["user_email"]);
  $query ="SELECT `user_email_status` FROM `signup-details` WHERE `email` = '$email'";
  $result = mysqli_query($link,$query);
  if (mysqli_num_rows($result) !=0 ) {
    $row=mysqli_fetch_array($result); 
    if($row['user_email_status']=="verified"){
      echo'<a class="nav-link btn_active pop_up_logout_header" href="#"
      style="background: #e0e0e0;margin-left: 1rem;">Logout</a>';      
    }else{
      echo'<a class="nav-link btn_active pop_up_login_header"  style="background: #e0e0e0;margin-left: 1rem;">Login</a>';   
    }
  }
}else{    
  echo'<a class="nav-link btn_active pop_up_login_header"  style="background: #e0e0e0;margin-left: 1rem;cursor:pointer;">Login</a>'; 
}
?>