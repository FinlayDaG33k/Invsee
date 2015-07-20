<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_name = $_GET['item_name'];
$item_category = $_GET['item_category'];
$submission_date = date('Y-m-d');
$item_stock = $_GET['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `invsee` WHERE item_name='$item_name'");

if(mysqli_num_rows($query) > 0){

    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = mysqli_query($conn, "INSERT INTO invsee (item_name,item_category,submission_date,stock) VALUES ('$item_name','$item_category','$submission_date','$item_stock')");
    echo WORDING_ITEMADDED;
   }

mysqli_close($conn);

/*

*/
?>