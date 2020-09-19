<?php
// session_start();
require_once "VcardExport.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
$data=array();
$json=json_decode(file_get_contents("php://input"));
$json_length=count($json);
  // echo($json_length);
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
$complete_array=array();
 for($i=0;$i<($json_length);$i++)
 {
// print_r($json[$i]);
  foreach (($json[$i]) as $key=>$value) {
//      echo($key);
//  echo($value);

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

 }
 $complete_array[]=array($first_name,$last_name,$email,$mobile,$tel_office,$tel_home,$fax,$city,$nickname,$company,$address,$website);
 }
  // $complete_array=array($first_name,$last_name,$email,$mobile,$address,'456','0000','aarya');
  for($i=0;$i<($json_length);$i++){   
      $vcardExport[$i] = new VcardExport();      
      $vcardExport[$i]->contactVcardExportService($complete_array[$i]);              
  }  
  // print_r($_SESSION['array_name']);
    $data['status']=201;  
    echo json_encode($data);    
}
else{
      $data['status'] = 601;     
      echo json_encode($data);
}
?>