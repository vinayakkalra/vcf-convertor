<?php
session_start();
require_once "DBController.php";
$dbController = new DBController();
$json=json_decode(file_get_contents("php://input"));

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
//    foreach($array_key_value as $x){
        print_r($array_key_value);
        print_r($array_data_value);
//     }

  
   $data['status'] = 201;
   
   echo json_encode($data); 
   
 
    // $contactResult = $dbController->runQuery($query,$param_type,$param_value_array);
    
    
    // require_once "VcardExport.php";
    // $vcardExport = new VcardExport();
    // $vcardExport->contactVcardExportService($contactResult);
    // exit;


// else{
//     $data['status'] = 601;
//    echo json_encode($data); 
// }
