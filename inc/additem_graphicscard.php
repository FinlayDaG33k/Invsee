<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$GPU_MODEL = $_POST['GPU_MODEL'];
$GPU_CHIP = $_POST['GPU_CHIP'];
$GPU_VRAM = $_POST['GPU_VRAM'];
$GPU_CONNECTORS = '';
if($_POST['VGA'] == true){
    $GPU_CONNECTORS .= 'VGA';
} 
elseif($_POST['DVI'] == true){
    $GPU_CONNECTORS .= 'DVI';
}
elseif($_POST['HDMI'] == true){
    $GPU_CONNECTORS .= 'HDMI';
}
elseif($_POST['DISPLAYPORT'] == true){
    $GPU_CONNECTORS .= 'Display Port';
}
$GPU_INTERFACE = $_POST['GPU_INTERFACE'];

$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `graphicscard` WHERE gpu_model='$GPU_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `graphicscard` (item_brand,gpu_model,gpu_chip,gpu_vram,gpu_connectors,gpu_interface,submission_date,stock) VALUES ('$item_brand','$GPU_MODEL','$GPU_CHIP','$GPU_VRAM','$GPU_CONNECTORS','$GPU_INTERFACE','$submission_date','$item_stock')";
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