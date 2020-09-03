<?php

require_once('link.php');

 $target_dir = "../uploads/";
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
   if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
     $uploadOk = 1;
   } else {
     echo "File is not an excel.";
     $uploadOk = 0;
   }
 }
 
 // Check if file already exists
//  if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//    $uploadOk = 0;
//  }
 
 // Check file size
 if ($_FILES["fileToUpload"]["size"] > 500000) {
   echo "Sorry, your file is too large.";
   $uploadOk = 0;
 }
 
//  // Allow certain file formats
//  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//  && $imageFileType != "gif" ) {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
//  }
 
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $filename= $_FILES["fileToUpload"]["name"];
    $id = 0;
    $result = mysqli_query($link, "SELECT max(id) FROM `table_excel`");
    while ($row = mysqli_fetch_array($result)) {
      $id = $row[0];  
  }
  $id = $id + 1;
    $query = "INSERT INTO `table_excel`(`id`,`excel`,`time`,`from_ip`,`from_browser`) VALUES ($id,'uploads/$filename','$date_now','$from_ip','$from_browser')";
    if($result = mysqli_query($link, $query))  
    {
      $data['status'] = 201;
      $data['id'] = $id;
      $data['filename']=$filename;
      echo json_encode($data);
      // $_SESSION['authenticated']=true;
    }
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

    // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>