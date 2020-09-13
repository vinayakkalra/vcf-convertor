<?php
session_start();
require_once "DBController.php";
$dbController = new DBController();

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
header('Content-disposition: attachment; filename=file.zip');
header('Content-Length: ' . filesize($tmpFile));
readfile($tmpFile);

unlink($tmpFile);

?>
