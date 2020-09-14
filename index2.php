<?php
session_start();
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

if(!empty($_GET["action"])) {
    $query = "SELECT * FROM vcf_data WHERE id = ?";
    $param_type = "i";
    $param_value_array = array($_GET["id"]);
    $contactResult = $dbController->runQuery($query,$param_type,$param_value_array);    
    require_once "VcardExport.php";
    $vcardExport = new VcardExport();
    $vcardExport->contactVcardExportService($contactResult);
    exit;
}
// Program to display current page URL. 
  
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI']; 
require_once('php/link.php');
$result1 = mysqli_query($link, "SELECT round FROM `vcf_data`"); 
 $row=mysqli_fetch_array($result1);

for ($i=1;($i<=$row['round']);$i++){
    $files[] = $current_url."?action=export&id=".$i.".vcf";   
}
// $files = array($image1, $image2);

$tmpFile = tempnam('/tmp', '');
$zip = new ZipArchive;
$zip->open($tmpFile, ZipArchive::CREATE);
foreach ($files as $file) {
    // download file
    $fileContent = file_get_contents($file);

    $zip->addFromString(basename($file), $fileContent);
}
$zip->close();

header('Content-Type: application/zip');
header('Content-disposition: attachment; filename=VcfConvertor.zip');
header('Content-Length: ' . filesize($tmpFile));
readfile($tmpFile);

 }
 $complete_array[]=array($first_name,$last_name,$email,$mobile,$tel_office,$tel_home,$fax,$city,$nickname,$company,$address,$website,$birthday);
 }
  // $complete_array=array($first_name,$last_name,$email,$mobile,$address,'456','0000','aarya');
  for($i=0;$i<($json_length);$i++){   
      $vcardExport[$i] = new VcardExport();      
      $vcardExport[$i]->contactVcardExportService($complete_array[$i]);              
  }  
  // print_r($_SESSION['array_name']);
  $c=$_SESSION['array_name'];

    $file = "contact.vcf";
    $txt = fopen($file, "w") or die("Unable to open file!");
    fwrite($txt, $c);
    fclose($txt);
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    header("Content-Type: text/plain");
    readfile($file);     
    unset($_SESSION['array_name']); 
    $data['status']=201;  
    echo json_encode($data);    
}
else{
      $data['status'] = 601;     
      echo json_encode($data);
}
?>

