<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$CASE_MODEL = $_POST['CASE_MODEL'];
$CASE_FORMFACTOR = $_POST['CASE_FORMFACTOR'];
$CASE_EXPANSIONSLOTS = $_POST['CASE_EXPANSIONSLOTS'];
$CASE_25INCHDRIVEBAY = $_POST['CASE_25INCHDRIVEBAY'];
$CASE_35INCHDRIVEBAY = $_POST['CASE_35INCHDRIVEBAY'];
$CASE_5INCHDRIVEBAY = $_POST['CASE_5INCHDRIVEBAY'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `case` WHERE case_model='$CASE_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `case` (item_brand,case_model,case_formfactor,case_expansionslots,case_25inchdrivebay,case_35inchdrivebay,case_5inchdrivebay,submission_date,stock) VALUES ('$item_brand','$CASE_MODEL','$CASE_FORMFACTOR','$CASE_EXPANSIONSLOTS','$CASE_25INCHDRIVEBAY','$CASE_35INCHDRIVEBAY','$CASE_5INCHDRIVEBAY','$submission_date','$item_stock')";
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