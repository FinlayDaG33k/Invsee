<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$RAM_MODEL = $_POST['RAM_MODEL'];
$RAM_TYPE = $_POST['RAM_TYPE'];
$RAM_SIZE = $_POST['RAM_SIZE'];
$RAM_SPEED = $_POST['RAM_SPEED'].$_POST['RAM_SPEED_UNIT'];
$RAM_TIMINGS = $_POST['RAM_TIMINGS'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `ram` WHERE ram_model='$RAM_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `ram` (item_brand,ram_model,ram_type,ram_size,ram_speed,ram_timings,submission_date,stock) VALUES ('$item_brand','$RAM_MODEL','$RAM_TYPE','$RAM_SIZE','$RAM_SPEED','$RAM_TIMINGS','$submission_date','$item_stock')";
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