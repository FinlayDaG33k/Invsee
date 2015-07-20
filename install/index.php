<h1>Dependecies</h1>

<?php
echo 'MySQL: ';
if (!extension_loaded('mysqli')) {
    echo 'Not Found';
} else {
    echo 'OK';
}

echo '<br />';

$configfile = '../conf';
if (is_writable($configfile)) {
    echo 'Config is writeable';
} else {
    echo 'Config is NOT writeable';
}

?>
<br />
<a href='install_1.php'><button>Continue</button></a>