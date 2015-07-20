<?php

$mysqli = new mysqli($config['configuration']['database_ip'], $config['configuration']['database_username'], $config['configuration']['database_password'], $config['configuration']['database_name']);


/* CPU list */
$cpu_query = "SELECT * FROM cpu";

echo '<h1>' . WORDING_ITEMCATEGORY_CPU . '</h1>';
if ($cpu_result = $mysqli->query($cpu_query)) {
    
      echo '<table border="1">';
      echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CPU_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CPU_CORES . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CPU_CLOCKSPEED . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($cpu_row = $cpu_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $cpu_row[1] . '</td>';
      echo '<td>' . $cpu_row[2] . '</td>';
      echo '<td>' . $cpu_row[3] . '</td>';
      echo '<td>' . $cpu_row[5] . '</td>';
      echo '<td>' . $cpu_row[4] . '</td>';
      echo '<td>' . $cpu_row[7] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $cpu_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* RAM list */
$ram_query = "SELECT * FROM ram";

echo '<h1>' . WORDING_ITEMCATEGORY_RAM . '</h1>';
if ($ram_result = $mysqli->query($ram_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_RAM_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_RAM_TYPE . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_RAM_SIZE . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_RAM_SPEED . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_RAM_TIMINGS . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($ram_row = $ram_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $ram_row[1] . '</td>';
      echo '<td>' . $ram_row[2] . '</td>';
      echo '<td>' . $ram_row[3] . '</td>';
      echo '<td>' . $ram_row[4] . '</td>';
      echo '<td>' . $ram_row[5] . '</td>';
      echo '<td>' . $ram_row[6] . '</td>';
      echo '<td>' . $ram_row[8] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $ram_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* motherboard list */
$motherboard_query = "SELECT * FROM motherboard";

echo '<h1>' . WORDING_ITEMCATEGORY_MOTHERBOARD . '</h1>';
if ($motherboard_result = $mysqli->query($motherboard_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_FORMFACTOR . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_RAM_TYPE . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS16X . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS8X . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS4X . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCISLOTS . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($motherboard_row = $motherboard_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $motherboard_row[1] . '</td>';
      echo '<td>' . $motherboard_row[2] . '</td>';
      echo '<td>' . $motherboard_row[3] . '</td>';
      echo '<td>' . $motherboard_row[4] . '</td>';
      echo '<td>' . $motherboard_row[5] . '</td>';
      echo '<td>' . $motherboard_row[6] . '</td>';
      echo '<td>' . $motherboard_row[7] . '</td>';
      echo '<td>' . $motherboard_row[8] . '</td>';
      echo '<td>' . $motherboard_row[9] . '</td>';
      echo '<td>' . $motherboard_row[11] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $motherboard_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* HDD list */
$HDD_query = "SELECT * FROM hdd";

echo '<h1>' . WORDING_ITEMCATEGORY_HDD . '</h1>';
if ($HDD_result = $mysqli->query($HDD_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_HDD_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_HDD_CAPACITY . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_HDD_RPM . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_HDD_INTERFACE . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_HDD_FORMAT . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($HDD_row = $HDD_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $HDD_row[1] . '</td>';
      echo '<td>' . $HDD_row[2] . '</td>';
      echo '<td>' . $HDD_row[3] . '</td>';
      echo '<td>' . $HDD_row[4] . '</td>';
      echo '<td>' . $HDD_row[5] . '</td>';
      echo '<td>' . $HDD_row[6] . '</td>';
      echo '<td>' . $HDD_row[8] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $HDD_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* SSD list */
$SSD_query = "SELECT * FROM ssd";

echo '<h1>' . WORDING_ITEMCATEGORY_SSD . '</h1>';
if ($SSD_result = $mysqli->query($SSD_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SSD_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SSD_CAPACITY . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SSD_INTERFACE . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SSD_FORMAT . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($SSD_row = $SSD_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $SSD_row[1] . '</td>';
      echo '<td>' . $SSD_row[2] . '</td>';
      echo '<td>' . $SSD_row[3] . '</td>';
      echo '<td>' . $SSD_row[4] . '</td>';
      echo '<td>' . $SSD_row[5] . '</td>';
      echo '<td>' . $SSD_row[7] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $SSD_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* CASE list */
$CASE_query = "SELECT * FROM `case`";

echo '<h1>' . WORDING_ITEMCATEGORY_CASE . '</h1>';
if ($CASE_result = $mysqli->query($CASE_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CASE_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CASE_FORMFACTOR . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CASE_EXPANSIONSLOTS . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CASE_25INCHDRIVEBAY . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CASE_35INCHDRIVEBAY . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CASE_5INCHDRIVEBAY . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($CASE_row = $CASE_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $CASE_row[1] . '</td>';
      echo '<td>' . $CASE_row[2] . '</td>';
      echo '<td>' . $CASE_row[3] . '</td>';
      echo '<td>' . $CASE_row[4] . '</td>';
      echo '<td>' . $CASE_row[5] . '</td>';
      echo '<td>' . $CASE_row[6] . '</td>';
      echo '<td>' . $CASE_row[7] . '</td>';
      echo '<td>' . $CASE_row[9] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $CASE_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* MOUSE list */
$MOUSE_query = "SELECT * FROM mouse";

echo '<h1>' . WORDING_ITEMCATEGORY_MOUSE . '</h1>';
if ($MOUSE_result = $mysqli->query($MOUSE_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_MOUSE_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($MOUSE_row = $MOUSE_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $MOUSE_row[1] . '</td>';
      echo '<td>' . $MOUSE_row[2] . '</td>';
      echo '<td>' . $MOUSE_row[4] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $MOUSE_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* KEYBOARD list */
$KEYBOARD_query = "SELECT * FROM keyboard";

echo '<h1>' . WORDING_ITEMCATEGORY_KEYBOARD . '</h1>';
if ($KEYBOARD_result = $mysqli->query($KEYBOARD_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_KEYBOARD_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_KEYBOARD_SWITCHES . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($KEYBOARD_row = $KEYBOARD_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $KEYBOARD_row[1] . '</td>';
      echo '<td>' . $KEYBOARD_row[2] . '</td>';
      echo '<td>' . $KEYBOARD_row[3] . '</td>';
      echo '<td>' . $KEYBOARD_row[5] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $KEYBOARD_result->close();
} else {
  echo WORDING_NOITEMS;
}

/* SCREEN list */
$SCREEN_query = "SELECT * FROM screen";

echo '<h1>' . WORDING_ITEMCATEGORY_SCREEN . '</h1>';
if ($SCREEN_result = $mysqli->query($SCREEN_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SCREEN_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SCREEN_RESOLUTION . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SCREEN_SIZE . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_SCREEN_CONNECTORS . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($SCREEN_row = $SCREEN_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $SCREEN_row[1] . '</td>';
      echo '<td>' . $SCREEN_row[2] . '</td>';
      echo '<td>' . $SCREEN_row[3] . '</td>';
      echo '<td>' . $SCREEN_row[4] . '</td>';
      echo '<td>' . $SCREEN_row[5] . '</td>';
      echo '<td>' . $SCREEN_row[7] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $SCREEN_result->close();
} else {
  echo WORDING_NOITEMS;
}

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

/* CPUCOOLER list */
$CPUCOOLER_query = "SELECT * FROM cpucooler";

echo '<h1>' . WORDING_ITEMCATEGORY_CPUCOOLER . '</h1>';
if ($CPUCOOLER_result = $mysqli->query($CPUCOOLER_query)) {
    
     echo '<table border="1">';
     echo '<tr>';
      echo '<td>' . WORDING_ITEMBRAND . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CPUCOOLER_MODEL . '</td>';
      echo '<td>' . WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET . '</td>';
      echo '<td>' . WORDING_ITEMSINSTOCK . '</td>';
      echo '</tr>';
    /* fetch object array */
    while ($CPUCOOLER_row = $CPUCOOLER_result->fetch_row()) {
      echo '<tr>';
      echo '<td>' . $CPUCOOLER_row[1] . '</td>';
      echo '<td>' . $CPUCOOLER_row[2] . '</td>';
      echo '<td>' . $CPUCOOLER_row[3] . '</td>';
      echo '<td>' . $CPUCOOLER_row[5] . '</td>';
      echo '</tr>';
    }
echo '</table>';
    /* free result set */
    $CPUCOOLER_result->close();
} else {
  echo WORDING_NOITEMS;
}

$mysqli->close();
?>