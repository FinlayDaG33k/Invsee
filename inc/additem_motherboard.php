<?php
$contents = file_get_contents("../conf/config.json"); 
$config = json_decode($contents,true);
include("../lang/" . $config['configuration']['language'] . ".php");


$item_brand = $_POST['ITEM_BRAND'];
$MOTHERBOARD_MODEL = $_POST['MOTHERBOARD_MODEL'];
$CPU_SOCKET = $_POST['CPU_SOCKET'];
$FORM_FACTOR = $_POST['FORM_FACTOR'];
$RAM_TYPE = $_POST['RAM_TYPE'];
$PCIe_SLOTS_x16 = $_POST['PCIe_SLOTS_x16'];
$PCIe_SLOTS_x8 = $_POST['PCIe_SLOTS_x8'];
$PCIe_SLOTS_x4 = $_POST['PCIe_SLOTS_x4'];
$PCI_SLOTS = $_POST['PCI_SLOTS'];
$submission_date = date('Y-m-d');
$item_stock = $_POST['item_stock'];

$conn = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);





$query = mysqli_query($conn, "SELECT * FROM `motherboard` WHERE motherboard_model='$MOTHERBOARD_MODEL'");

if(mysqli_num_rows($query) > 0){
    echo WORDING_ITEMEXISTS;
}else{
    // do something
   $query = "INSERT INTO `motherboard` (item_brand,motherboard_model,cpu_socket,form_factor,ram_type,pcie_slots_x16,pcie_slots_x8,pcie_slots_x4,pci_slots,submission_date,stock) VALUES ('$item_brand','$MOTHERBOARD_MODEL','$CPU_SOCKET','$FORM_FACTOR','$RAM_TYPE','$PCIe_SLOTS_x16','$PCIe_SLOTS_x8','$PCIe_SLOTS_x4','$PCI_SLOTS','$submission_date','$item_stock')";
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