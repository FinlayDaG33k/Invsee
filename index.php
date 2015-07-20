<?php
// loadup the configuration

if(file_exists("conf/config.json")){
$contents = file_get_contents("conf/config.json"); 
$config = json_decode($contents,true);



// apply the configuration
include("lang/" . $config['configuration']['language'] . ".php");
$company = $config['configuration']['company'];
} else {
    echo '<meta http-equiv="refresh" content="0; url=install" />';
}
?>

<html>
<head>
<title><?php echo $company;?> - Invsee By FinlayDaG33k</title>
</head>

<body>
<div id="wrapper">

<div id="navbar">
<ul>
  <li><a href="?action=inventory"><?php echo WORDING_VIEWINVENTORY; ?></a></li>
  <li><a href="?action=additem"><?php echo WORDING_ADDITEM; ?></a></li>
</ul>
</div>

<div id="content">
    <?php   
			// don't touch this, it might break the site!
			
			
			$disallowed_paths = array('header', 'footer'); 
			if (!empty($_GET['action'])) {
				$tmp_action = basename($_GET['action']);
				if (!in_array($tmp_action, $disallowed_paths) && file_exists("pages/{$tmp_action}.php")) {
					$action = $tmp_action;
				} else {
				$action = error;
				}
			} else {
        $action = 'inventory';
      }
			include("pages/$action.php"); 
			?>
</div>

<div id="footer">
<p>
&copy;2015 <a href="https://www.finlaydag33k.nl" target="_new">Finlaydag33k</a>
<p>
</div>

</div>
</body>
</html>
