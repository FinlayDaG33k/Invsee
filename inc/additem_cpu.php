<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$CPU_MODEL = $_POST['CPU_MODEL'];
$CPU_SOCKET = $_POST['CPU_SOCKET'];
$CPU_CORES = $_POST['CPU_CORES'];
$CPU_CLOCKSPEED = $_POST['CPU_CLOCKSPEED'].$_POST['CPU_CLOCKSPEED_UNIT'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `cpu` WHERE cpu_model='$CPU_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `cpu` (item_brand,cpu_model,cpu_socket,cpu_clockspeed,cpu_cores,submission_date,stock) VALUES ('$item_brand','$CPU_MODEL','$CPU_SOCKET','$CPU_CLOCKSPEED','$CPU_CORES','$submission_date','$item_stock')";
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