<form action="inc/additem_graphicscard.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_GPU_MODEL; ?><br>
<input type="text" name="GPU_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_GPU_CHIP; ?><br>
<input type="text" name="GPU_CHIP"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_GPU_VRAM; ?><br>
<input type="text" name="GPU_VRAM"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_GPU_CONNECTORS; ?><br>
<input type="checkbox" name="VGA" value="VGA">VGA<br>
<input type="checkbox" name="DVI" value="DVI">DVI<br>
<input type="checkbox" name="HDMI" value="HDMI">HDMI<br>
<input type="checkbox" name="DISPLAYPORT" value="HDMI">Display Port<br>
<?php echo WORDING_ITEMCATEGORY_ITEM_GPU_INTERFACE; ?><br>
<select name="GPU_INTERFACE">
  <option value="PCIe">PCIe</option>
  <option value="AGP">AGP</option>
  <option value="Propie">Mechanical</option>
</select><br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>