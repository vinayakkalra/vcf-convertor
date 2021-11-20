<?php
//localhost server
$link = mysqli_connect("localhost", "root", "", "vcfconverter");

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}


?>