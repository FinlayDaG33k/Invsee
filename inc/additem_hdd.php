<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$HDD_MODEL = $_POST['HDD_MODEL'];
$HDD_CAPACITY = $_POST['HDD_CAPACITY'].$_POST['HDD_CAPACITY_UNIT'];
$HDD_RPM = $_POST['HDD_RPM'];
$HDD_INTERFACE = $_POST['HDD_INTERFACE'];
$HDD_FORMAT = $_POST['HDD_FORMAT'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `hdd` WHERE hdd_model='$HDD_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `hdd` (item_brand,drive_model,drive_capacity,drive_rpm,drive_interface,drive_format,submission_date,stock) VALUES ('$item_brand','$HDD_MODEL','$HDD_CAPACITY','$HDD_RPM','$HDD_INTERFACE','$HDD_FORMAT','$submission_date','$item_stock')";
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