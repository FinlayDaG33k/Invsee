<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$SCREEN_MODEL = $_POST['SCREEN_MODEL'];
$SCREEN_RESOLUTION = $_POST['SCREEN_RESOLUTION'];
$SCREEN_SIZE = $_POST['SCREEN_SIZE'];
$SCREEN_CONNECTORS = $_POST['SCREEN_CONNECTORS'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `screen` WHERE screen_model='$SCREEN_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `screen` (item_brand,screen_model,screen_resolution,screen_format,screen_connectors,submission_date,stock) VALUES ('$item_brand','$SCREEN_MODEL','$SCREEN_RESOLUTION','$SCREEN_SIZE','$SCREEN_CONNECTORS','$submission_date','$item_stock')";
        if ($conn->query($query) === TRUE) {
    echo WORDING_ITEMADDED;
    } else {
    echo WORDING_CANTADDITEM . $conn->error;
    }
   }

mysqli_close($conn);

/*

*/
?>