<?php
$admin_password = md5($_POST['admin_password']);
$admin_password_confirm = md5($_POST['admin_password_confirm']);

if($admin_password == $admin_password_confirm){

error_reporting(-1);
ini_set('display_errors', 'On');

// Create connection
$conn = new mysqli($_POST['database_ip'], $_POST['database_username'], $_POST['database_password']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$database_name = $_POST['database_name'];
// Create database
$createdatabase = "CREATE DATABASE $database_name";
if ($conn->query($createdatabase) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

echo "<br>";

$conn = new mysqli($_POST['database_ip'], $_POST['database_username'], $_POST['database_password'], $_POST['database_name']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cpu_createtable = "CREATE TABLE cpu( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "cpu_model VARCHAR(100) NOT NULL, ".
       "cpu_socket VARCHAR(100) NOT NULL, ".
       "cpu_clockspeed VARCHAR(100) NOT NULL, ".
       "cpu_cores VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";
       
$ram_createtable = "CREATE TABLE ram( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "ram_model VARCHAR(100) NOT NULL, ".
       "ram_type VARCHAR(100) NOT NULL, ".
       "ram_size VARCHAR(100) NOT NULL, ".
       "ram_speed VARCHAR(100) NOT NULL, ".
       "ram_timings VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";   

$motherboard_createtable = "CREATE TABLE motherboard( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "motherboard_model VARCHAR(100) NOT NULL, ".
       "cpu_socket VARCHAR(100) NOT NULL, ".
       "form_factor VARCHAR(100) NOT NULL, ".
       "RAM_type VARCHAR(100) NOT NULL, ".
       "PCIe_slots_x16 INT NOT NULL, ".
       "PCIe_slots_x8 INT NOT NULL, ".
       "PCIe_slots_x4 INT NOT NULL, ".
       "PCI_slots INT NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";    

$hdd_createtable = "CREATE TABLE hdd( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "drive_model VARCHAR(100) NOT NULL, ".
       "drive_capacity VARCHAR(100) NOT NULL, ".
       "drive_rpm VARCHAR(100) NOT NULL, ".
       "drive_interface VARCHAR(100) NOT NULL, ".
       "drive_format VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";
       
$ssd_createtable = "CREATE TABLE ssd( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "drive_model VARCHAR(100) NOT NULL, ".
       "drive_capacity VARCHAR(100) NOT NULL, ".
       "drive_interface VARCHAR(100) NOT NULL, ".
       "drive_format VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";
       
$case_createtable = "CREATE TABLE `case`( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "case_model VARCHAR(100) NOT NULL, ".
       "case_formfactor VARCHAR(100) NOT NULL, ".
       "case_expansionslots VARCHAR(100) NOT NULL, ".
       "case_25inchdrivebay VARCHAR(100) NOT NULL, ".
       "case_35inchdrivebay VARCHAR(100) NOT NULL, ".
       "case_45inchdrivebay VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";
       
$mouse_createtable = "CREATE TABLE mouse( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "mouse_model VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";
       
$keyboard_createtable = "CREATE TABLE keyboard( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "keyboard_model VARCHAR(100) NOT NULL, ".
       "keyboard_switches VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";
       
$screen_createtable = "CREATE TABLE screen( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "screen_model VARCHAR(100) NOT NULL, ".
       "screen_format VARCHAR(100) NOT NULL, ".
       "screen_resolution VARCHAR(100) NOT NULL, ".
       "screen_connectors VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";  
       
$graphicscard_createtable = "CREATE TABLE graphicscard( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "gpu_model VARCHAR(100) NOT NULL, ".
       "gpu_chip VARCHAR(100) NOT NULL, ".
       "gpu_vram VARCHAR(100) NOT NULL, ".
       "gpu_connectors VARCHAR(100) NOT NULL, ".
       "gpu_interface VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";

$cpucooler_createtable = "CREATE TABLE cpucooler( ".
       "item_id INT NOT NULL AUTO_INCREMENT, ".
       "item_brand VARCHAR(100) NOT NULL, ".
       "cpucooler_model VARCHAR(100) NOT NULL, ".
       "cpu_socket VARCHAR(100) NOT NULL, ".
       "submission_date DATE, ".
       "stock INT NOT NULL, ".
       "PRIMARY KEY ( item_id )); ";
       
if ($conn->query($cpu_createtable) === TRUE && $conn->query($ram_createtable) === TRUE && $conn->query($motherboard_createtable) === TRUE && $conn->query($hdd_createtable) === TRUE && $conn->query($ssd_createtable) === TRUE  && $conn->query($case_createtable) === TRUE && $conn->query($mouse_createtable) === TRUE  && $conn->query($keyboard_createtable) === TRUE  && $conn->query($screen_createtable) === TRUE && $conn->query($graphicscard_createtable) === TRUE && $conn->query($cpucooler_createtable) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();


$configfile = '../conf/config.json';

if (file_exists($configfile)){
    unlink($configfile);
}
$current = '{';
$current .= '    "configuration": {';
$current .= '        "database_ip": "'. $_POST['database_ip'] .  ' ",';
$current .= '        "database_port": "' . $_POST['database_port'] . '",';
$current .= '        "database_name": "' . $_POST['database_name'] . '",';
$current .= '        "database_username": "' . $_POST['database_username'] . '",';
$current .= '        "database_password": "' . $_POST['database_password'] . '",';
$current .= '        "company": "' . $_POST['company'] . '",';
$current .= '        "language": "' . $_POST['language'] . '",';
$current .= '        "admin_username": "' . $_POST['admin_username'] . '",';
$current .= '        "admin_password": "' . $admin_password . '"';
$current .= '       }';
$current .= '}';
file_put_contents($configfile, $current);
echo '<a href="../"><button>Continue</button></a>';
} else {
    echo 'Admin Passwords did NOT match, please go back and try again!';
}
?>
<br>





