<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$SSD_MODEL = $_POST['SSD_MODEL'];
$SSD_CAPACITY = $_POST['SSD_CAPACITY'].$_POST['SSD_CAPACITY_UNIT'];
$SSD_INTERFACE = $_POST['SSD_INTERFACE'];
$SSD_FORMAT = $_POST['SSD_FORMAT'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `ssd` WHERE ssd_model='$SSD_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `ssd` (item_brand,drive_model,drive_capacity,drive_interface,drive_format,submission_date,stock) VALUES ('$item_brand','$SSD_MODEL','$SSD_CAPACITY','$SSD_INTERFACE','$SSD_FORMAT','$submission_date','$item_stock')";
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