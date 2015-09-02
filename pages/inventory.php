<?php

$mysqli = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);

?>
<div id="category">
    <?php
/* CPU list */
$cpu_query = "SELECT * FROM cpu";
?>
<h1><?php echo WORDING_ITEMCATEGORY_CPU ?></h1>
<?php
if ($cpu_result = $mysqli->query($cpu_query)) {
    ?>
      <table border="1">
      <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CPU_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CPU_CORES ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CPU_CLOCKSPEED ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($cpu_row = $cpu_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $cpu_row[1] ?></td>
      <td><?php echo $cpu_row[2] ?></td>
      <td><?php echo $cpu_row[3] ?></td>
      <td><?php echo $cpu_row[5] ?></td>
      <td><?php echo $cpu_row[4] ?></td>
      <td><?php echo $cpu_row[7] ?></td>
      </tr>
      <?php
    }
    ?>
</table>
<?php
    /* free result set */
    $cpu_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
<?php
/* RAM list */
$ram_query = "SELECT * FROM ram";
?>
<h1><?php echo WORDING_ITEMCATEGORY_RAM ?></h1>
<?php
if ($ram_result = $mysqli->query($ram_query)) {
    ?>
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_RAM_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_RAM_TYPE ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_RAM_SIZE ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_RAM_SPEED ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_RAM_TIMINGS ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($ram_row = $ram_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $ram_row[1]?></td>
      <td><?php echo $ram_row[2]?></td>
      <td><?php echo $ram_row[3]?></td>
      <td><?php echo $ram_row[4]?></td>
      <td><?php echo $ram_row[5]?></td>
      <td><?php echo $ram_row[6]?></td>
      <td><?php echo $ram_row[8]?></td>
      </tr>
      <?php
    }
    ?>
</table>
<?php
    /* free result set */
    $ram_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
    <?php
/* motherboard list */
$motherboard_query = "SELECT * FROM motherboard";
?>
<h1><?php echo WORDING_ITEMCATEGORY_MOTHERBOARD ?></h1>
<?php
if ($motherboard_result = $mysqli->query($motherboard_query)) {
    ?>
    <table border="1">
    <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_FORMFACTOR ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_RAM_TYPE ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS16X ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS8X ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS4X ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCISLOTS?> </td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($motherboard_row = $motherboard_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $motherboard_row[1] ?></td>
      <td><?php echo $motherboard_row[2] ?></td>
      <td><?php echo $motherboard_row[3] ?></td>
      <td><?php echo $motherboard_row[4] ?></td>
      <td><?php echo $motherboard_row[5] ?></td>
      <td><?php echo $motherboard_row[6] ?></td>
      <td><?php echo $motherboard_row[7] ?> </td>
      <td><?php echo $motherboard_row[8] ?></td>
      <td><?php echo $motherboard_row[9] ?></td>
      <td><?php echo $motherboard_row[11] ?></td>
      </tr>
      <?php
    }
echo '</table>';
    /* free result set */
    $motherboard_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
<?php
/* HDD list */
$HDD_query = "SELECT * FROM hdd";
?>

<h1><?php echo WORDING_ITEMCATEGORY_HDD?></h1>
<?php
if ($HDD_result = $mysqli->query($HDD_query)) {
    ?>
    
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_HDD_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_HDD_CAPACITY ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_HDD_RPM ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_HDD_INTERFACE ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_HDD_FORMAT ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($HDD_row = $HDD_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $HDD_row[1] ?></td>
      <td><?php echo $HDD_row[2] ?></td>
      <td><?php echo $HDD_row[3] ?></td>
      <td><?php echo $HDD_row[4] ?></td>
      <td><?php echo $HDD_row[5] ?></td>
      <td><?php echo $HDD_row[6] ?></td>
      <td><?php echo $HDD_row[8] ?></td>
      </tr>
      <?php
    }
echo '</table>';
    /* free result set */
    $HDD_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
<?php
/* SSD list */
$SSD_query = "SELECT * FROM ssd";
?>

<h1><?php echo WORDING_ITEMCATEGORY_SSD ?></h1>
<?php
if ($SSD_result = $mysqli->query($SSD_query)) {
    ?>
    
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SSD_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SSD_CAPACITY ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SSD_INTERFACE ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SSD_FORMAT ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($SSD_row = $SSD_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $SSD_row[1] ?></td>
      <td><?php echo $SSD_row[2] ?></td>
      <td><?php echo $SSD_row[3] ?></td>
      <td><?php echo $SSD_row[4] ?></td>
      <td><?php echo $SSD_row[5] ?></td>
      <td><?php echo $SSD_row[7] ?></td>
      </tr>
      <?php
    }
echo '</table>';
    /* free result set */
    $SSD_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>
<div id="category">
<?php

/* CASE list */
$CASE_query = "SELECT * FROM `case`";
?>

<h1><?php echo WORDING_ITEMCATEGORY_CASE ?></h1>
<?php
if ($CASE_result = $mysqli->query($CASE_query)) {
    ?>
    
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CASE_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CASE_FORMFACTOR ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CASE_EXPANSIONSLOTS ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CASE_25INCHDRIVEBAY ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CASE_35INCHDRIVEBAY ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CASE_5INCHDRIVEBAY ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($CASE_row = $CASE_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $CASE_row[1] ?></td>
      <td><?php echo $CASE_row[2] ?></td>
      <td><?php echo $CASE_row[3] ?></td>
      <td><?php echo $CASE_row[4] ?></td>
      <td><?php echo $CASE_row[5] ?></td>
      <td><?php echo $CASE_row[6] ?></td>
      <td><?php echo $CASE_row[7] ?></td>
      <td><?php echo $CASE_row[9] ?></td>
      </tr>
      <?php
    }
    ?>
</table>
<?php
    /* free result set */
    $CASE_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
<?php

/* MOUSE list */
$MOUSE_query = "SELECT * FROM mouse";
?>

<h1><?php echo WORDING_ITEMCATEGORY_MOUSE ?></h1>
<?php
if ($MOUSE_result = $mysqli->query($MOUSE_query)) {
    ?>
    
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_MOUSE_MODEL ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($MOUSE_row = $MOUSE_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $MOUSE_row[1] ?></td>
      <td><?php echo $MOUSE_row[2] ?></td>
      <td><?php echo $MOUSE_row[4] ?></td>
      </tr>
      <?php
    }
    ?>
</table>
<?php
    /* free result set */
    $MOUSE_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
<?php

/* KEYBOARD list */
$KEYBOARD_query = "SELECT * FROM keyboard";
?>

<h1><?php echo WORDING_ITEMCATEGORY_KEYBOARD ?></h1>
<?php
if ($KEYBOARD_result = $mysqli->query($KEYBOARD_query)) {
    ?>
    
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_KEYBOARD_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_KEYBOARD_SWITCHES ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($KEYBOARD_row = $KEYBOARD_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $KEYBOARD_row[1] ?></td>
      <td><?php echo $KEYBOARD_row[2] ?></td>
      <td><?php echo $KEYBOARD_row[3] ?></td>
      <td><?php echo $KEYBOARD_row[5] ?></td>
      </tr>
      <?php
    }
    ?>
</table>
<?php
    /* free result set */
    $KEYBOARD_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
<?php

/* SCREEN list */
$SCREEN_query = "SELECT * FROM screen";
?>

<h1><?php echo WORDING_ITEMCATEGORY_SCREEN ?></h1>
<?php
if ($SCREEN_result = $mysqli->query($SCREEN_query)) {
    ?>
    
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_RESOLUTION ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_SIZE ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_CONNECTORS ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($SCREEN_row = $SCREEN_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $SCREEN_row[1] ?></td>
      <td><?php echo $SCREEN_row[2] ?></td>
      <td><?php echo $SCREEN_row[3] ?></td>
      <td><?php echo $SCREEN_row[4] ?></td>
      <td><?php echo $SCREEN_row[5] ?></td>
      <td><?php echo $SCREEN_row[7] ?></td>
      </tr>
      <?php
    }
    ?>
</table>
<?php
    /* free result set */
    $SCREEN_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>

<div id="category">
<?php
/* GRAPHICSCARD list */
$GRAPHICSCARD_query = "SELECT * FROM graphicscard";

echo '<h1>' . WORDING_ITEMCATEGORY_GRAPHICSCARD . '</h1>';

if ($GRAPHICSCARD_result = $mysqli->query($GRAPHICSCARD_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_GPU_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_GPU_CHIP . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_GPU_VRAM . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_GPU_CONNECTORS . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_GPU_INTERFACE . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($GRAPHICSCARD_row = $GRAPHICSCARD_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $GRAPHICSCARD_row[1] . '</td>';
      echo '<td>' . $GRAPHICSCARD_row[2] . '</td>';
      echo '<td>' . $GRAPHICSCARD_row[3] . '</td>';
      echo '<td>' . $GRAPHICSCARD_row[4] . '</td>';
      echo '<td>' . $GRAPHICSCARD_row[5] . '</td>';
      echo '<td>' . $GRAPHICSCARD_row[6] . '</td>';
      echo '<td>' . $GRAPHICSCARD_row[8] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $GRAPHICSCARD_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>
<div id="category">
<?php

/* CPUCOOLER list */
$CPUCOOLER_query = "SELECT * FROM cpucooler";
?>

<h1><?php echo WORDING_ITEMCATEGORY_CPUCOOLER ?></h1>
<?php
if ($CPUCOOLER_result = $mysqli->query($CPUCOOLER_query)) {
    ?>
     <table border="1">
     <tr>
      <td><?php echo WORDING_ITEMBRAND ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CPUCOOLER_MODEL ?></td>
      <td><?php echo WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET ?></td>
      <td><?php echo WORDING_ITEMSINSTOCK ?></td>
      </tr>
      <?php
    /* fetch object array */
    while ($CPUCOOLER_row = $CPUCOOLER_result->fetch_row()) {
        ?>
      <tr>
      <td><?php echo $CPUCOOLER_row[1] ?></td>
      <td><?php echo $CPUCOOLER_row[2] ?></td>
      <td><?php echo $CPUCOOLER_row[3] ?></td>
      <td><?php echo $CPUCOOLER_row[5] ?></td>
      </tr>
      <?php
    }
    ?>
</table>
<?php
    /* free result set */
    $CPUCOOLER_result->close();
} else {
  echo WORDING_NOITEMS;
}
?>
</div>
<?php

$mysqli->close();
?>
