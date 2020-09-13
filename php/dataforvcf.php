<?php
session_start();
require_once 'link.php';
if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
} 
$json=json_decode(file_get_contents("php://input"),true);
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
else if($key=="birthday"){
$birthday=$value;
}// print_r($first_name);

 }
 $complete_array[]=array($first_name,$last_name,$email,$mobile,$tel_office,$tel_home,$fax,$city,$nickname,$company,$address,$website,$birthday);
 } 
//  print_r($complete_array);  
    $data = array();
    // echo $query;
    for($i=0;$i<($json_length);$i++)
 {
    $first_name=$complete_array[$i][0];
    $last_name=$complete_array[$i][1];
    $email=$complete_array[$i][2];
    $mobile=$complete_array[$i][3];
    $tel_office=$complete_array[$i][4];   
    $tel_home=$complete_array[$i][5];   
    $fax=$complete_array[$i][6];
    $city=$complete_array[$i][7];
    $nickname=$complete_array[$i][8];   
    $company=$complete_array[$i][9];   
    $address=$complete_array[$i][10];
    $website=$complete_array[$i][11];
    $birthday=$complete_array[$i][12];
    // echo $first_name;

    $result1 = mysqli_query($link, "SELECT * FROM `vcf_data`"); 
    // $row=mysqli_fetch_array($result1);
    $storeArray = Array();
while ($row = mysqli_fetch_array($result1)) {
    $storeArray[] =  $row['id'];  
}
        if($storeArray[$i]==($i+1)){
            if (mysqli_num_rows($result1) !=0 ) {         
                $query="UPDATE `vcf_data` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`mobile`='$mobile',`tel_office`='$tel_office',`tel_home`='$tel_home',`fax`='$fax',`city`='$city',`nickname`='$nickname',`company_name`='$company',`address`='$address',`website`='$website',`birthday`='$birthday',`round`=$json_length WHERE `id`=($i+1)"; 
                if($result = mysqli_query($link, $query)) {  
                    echo "update row ".($i+1)." Successfully.<br>"; 
                    // $data['status'] = 301;     
                    // echo json_encode($data); 
                        }
               
            } 
        }            
     else{
         $id=$i+1;
        $query = "INSERT INTO `vcf_data`(`id`,`first_name`, `last_name`, `email`, `mobile`, `tel_office`, `tel_home`, `fax`, `city`, `nickname`, `company_name`, `address`, `website`, `birthday`,`round`) VALUES ($id,'$first_name','$last_name','$email','$mobile','$tel_office','$tel_home', '$fax','$city','$nickname','$company','$address','$website','$birthday',$json_length)";
        if($result = mysqli_query($link, $query)) { 
            echo "insert row ".($i+1)." Successfully.<br>";  
        // $data['status'] = 201;               
        // echo json_encode($data);  
        }    
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 
    
}
    }


?>
