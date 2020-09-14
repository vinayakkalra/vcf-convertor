<?php
session_start();
if (!isset($_SESSION['authenticated']))
{
    //if the value was not set, you redirect the user to your login page
header('location:/');
exit;
    
}
else{
$c=$_SESSION['array_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
<input type="hidden"  value="<?php  echo $c; ?>" id="server_text"></input>
<script src="js/FileSaver.js"></script>
<script>         
        var take=document.getElementById('server_text').value;                                    
        var blob = new Blob([take], {type: "text/plain;charset=utf-8"});
        saveAs(blob, "contact.vcf");
        window.location.replace("/");        
</script>  
</body>
</html>
<?php
}
?>
