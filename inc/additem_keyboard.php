<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$KEYBOARD_MODEL = $_POST['KEYBOARD_MODEL'];
$KEYBOARD_SWITCHES = $_POST['KEYBOARD_SWITCHES'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `keyboard` WHERE keyboard_model='$KEYBOARD_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `keyboard` (item_brand,keyboard_model,keyboard_switches,submission_date,stock) VALUES ('$item_brand','$KEYBOARD_MODEL','$KEYBOARD_SWITCHES','$submission_date','$item_stock')";
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