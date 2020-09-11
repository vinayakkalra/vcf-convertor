<?php
session_start();

// if(!empty($_GET["action"])) {
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

  //  foreach ($json as $value) {
      print_r($json);
  //   foreach($value as $key=>$val) {
  //       // do stuff
  //       $array_key_value[]=$key;
  //       $array_data_value[]=$val;
  //       echo $key.' is '.$val.'<br>';
        
    // }
   
  // }
   foreach($array_key_value as $x){
        echo count($array_key_value);
        echo count($array_data_value);
        echo ($array_key_value)[1];
   }

      
//         foreach($array_key_value as $x=>$j){

//           if(($array_key_value)[$x]=="first_name"){
//             $first_name[]=($array_data_value)[$x];           
       
//           } 
//           if($array_key_value[$x]=="last_name"){
//             $last_name[]=($array_data_value)[$x];            
//           }
          
//           if($array_key_value[$x]=="email"){
//             $email[]=($array_data_value)[$x]; 
           
//         }
//          if($array_key_value[$x]=="mobile"){
//             $mobile[]=($array_data_value)[$x]; 
            
//       }
//     if($array_key_value[$x]=="tel_office"){
       
//         $tel_office[]=($array_data_value)[$x]; 
//     }
//     if($array_key_value[$x]=="tel_home"){
    
//         $tel_home[]=($array_data_value)[$x]; 
//   }
//    if($array_key_value[$x]=="fax"){
   
//     $fax[]=($array_data_value)[$x]; 
// }
//  if($array_key_value[$x]=="city"){
 
//     $city[]=($array_data_value)[$x]; 
// }
//  if($array_key_value[$x]=="nickname"){
  
//     $nickname[]=($array_data_value)[$x]; 
// }
// if($array_key_value[$x]=="company"){
  
//     $company[]=($array_data_value)[$x]; 
// } 
// if($array_key_value[$x]=="address"){
  
//     $address[]=($array_data_value)[$x]; 
// }
//  if($array_key_value[$x]=="website"){
  
//     $website[]=($array_data_value)[$x]; 
// }
//  if($array_key_value[$x]=="birthday"){

//     $birthday[]=($array_data_value)[$x]; 
// }// print_r($first_name);
//         }




  
  // $complete_array=array('chandan','sharma','987654321','abc@gmail.com','varanasi','456','0000','aarya');
  // require_once "VcardExport.php";
  // $vcardExport = new VcardExport();
  // $vcardExport->contactVcardExportService($complete_array);
  // exit;
//  }

?>
