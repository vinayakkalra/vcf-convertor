<?php
session_start();
$json=json_decode(file_get_contents("php://input"));

$first_name=array();
$last_name=array();
$mobile=array();
$email=array();
$address=array();
$tel_home=array();
$tel_office=array();
$fax=array();
$nickname=array();
$city=array();
$company=array();
$birthday=array();
$website=array();
$complete_array=array();
    // $all_data = $_POST['all_data'];
    $data_key=$json;  
    $array_key_value = array();
    $array_data_value= array(); 
//   print_r($data_key[1]);
  foreach ($json as $value) {
    // print_r($value);
    foreach($value as $key=>$val) {
        // do stuff
        $array_key_value[]=$key;
        $array_data_value[]=$val;
        echo $key.' is '.$val.'<br>';
        
    }
   
  }
   foreach($array_key_value as $x){
        echo count($array_key_value);
        echo count($array_data_value);
        echo ($array_key_value)[1];
   }

      
        foreach($array_key_value as $x=>$j){

          if(($array_key_value)[$x]=="first_name"){
            $first_name[]=($array_data_value)[$x];           
       
          }else{
            $first_name[]="";
          } 
          if($array_key_value[$x]=="last_name"){
            $last_name[]=($array_data_value)[$x];            
          }
          else {
            $last_name[]="";
          }
          if($array_key_value[$x]=="email"){
            $email[]=($array_data_value)[$x]; 
           
        }else{
          $email[]="";
        }
         if($array_key_value[$x]=="mobile"){
            $mobile[]=($array_data_value)[$x]; 
            
      }else {
        $mobile[]="";
      }
    if($array_key_value[$x]=="tel_office"){
       
        $tel_office[]=($array_data_value)[$x]; 
    }else{
      $tel_office[]="";
    }
    if($array_key_value[$x]=="tel_home"){
    
        $tel_home[]=($array_data_value)[$x]; 
  }else{
    $tel_home[]="";
  }
   if($array_key_value[$x]=="fax"){
   
    $fax[]=($array_data_value)[$x]; 
}else{
  $fax[]="";
}
 if($array_key_value[$x]=="city"){
 
    $city[]=($array_data_value)[$x]; 
}else{
  $city[]="";
}
 if($array_key_value[$x]=="nickname"){
  
    $nickname[]=($array_data_value)[$x]; 
}else{
$nickname[]="";
}
if($array_key_value[$x]=="company"){
  
    $company[]=($array_data_value)[$x]; 
}else{
  $company[]="";
} 
if($array_key_value[$x]=="address"){
  
    $address[]=($array_data_value)[$x]; 
}else{
  $address[]="";
}
 if($array_key_value[$x]=="website"){
  
    $website[]=($array_data_value)[$x]; 
}else{
  $website[]="";
}
 if($array_key_value[$x]=="birthday"){

    $birthday[]=($array_data_value)[$x]; 
}else{
  $birthday[]="";
}
// print_r($first_name);
        }


if(!empty($_GET["action"])) {
 
  // $contactResult = $dbController->runQuery($query,$param_type,$param_value_array);
  $complete_array=array($first_name[0],last_name[0],$mobile[0],$email[0],$address[0],$tel_home[0],$tel_office[0],$fax[0],$nickname[0],$city[0],$website[0],$birthday[0]);
  
  require_once "VcardExport.php";
  $vcardExport = new VcardExport();
  $vcardExport->contactVcardExportService($complete_array);
  exit;
}
?>
