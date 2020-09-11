<?php
session_start();
 if(!isset($_POST["action"])) {
  $json=json_decode(file_get_contents("php://input"));
  $json_length=count($json);
$i=0;
$first_name="";
$last_name="";
$mobile="";
$email="";
$address="";
$tel_home="";
$tel_office="";
$fax="";
$nickname="";
$city="";
$company="";
$birthday="";
$website="";
$data=array();
require_once "VcardExport.php";
$complete_array=array();
for($i=1;$i<($json_length);$i++)
{

  foreach (($json[$i]) as $key=>$value) {
//     echo($key);
// echo($value);

if($key=="first_name"){
  $first_name=$value;
} 
else if($key=="last_name"){
          $last_name=$value;
}

else if($key=="email"){
$email=$value;
 
}
else if($key=="mobile"){
  $mobile=$value;
}
else if($key=="tel_office"){
$tel_office=$value;
}
else if($key=="tel_home"){
$tel_home=$value;
}
else if($key=="fax"){
$fax=$value;
}
else if($key=="city"){
$city=$value; 
}
else if($key=="nickname"){
$nickname=$value;
}
else if($key=="company"){
$company=$value;
} 
else if($key=="address"){
$address=$value; 
}
else if($key=="website"){
$website=$value; 
}
else if($key=="birthday"){
$birthday=$value;
}// print_r($first_name);

 }
 $complete_array[]=array($first_name,$last_name,$email,$mobile,$tel_office,$tel_home,$fax,$city,$nickname,$company,$address,$website,$birthday);
}
  // $complete_array=array($first_name,$last_name,$email,$mobile,$address,'456','0000','aarya');
  for($i=0;$i<($json_length-1);$i++){
      $vcardExport = new VcardExport();      
      $vcardExport->contactVcardExportService($complete_array[$i]);
  
  }
 
 exit;
 }
else{
  echo "action not found";
}
?>
