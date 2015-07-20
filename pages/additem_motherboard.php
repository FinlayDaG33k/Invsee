<form action="inc/additem_motherboard.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_MODEL; ?><br>
<input type="text" name="MOTHERBOARD_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_FORMFACTOR; ?><br>
<select name="FORM_FACTOR">
  <option value="eATX">eATX</option>
  <option value="ATX">ATX</option>
  <option value="mATX">mATX</option>
  <option value="Unknown">Unknown</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET; ?><br>
<input type="text" name="CPU_SOCKET"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_RAM_TYPE; ?><br>
<select name="RAM_TYPE">
  <option value="DDR3 SODIMM">DDR3 SODIMM</option>
  <option value="DDR3">DDR3</option>
  <option value="DDR2 SODIMM">DDR2 SODIMM</option>
  <option value="DDR2">DDR2</option>
  <option value="DDR SODIMM">DDR SODIMM</option>
  <option value="DDR">DDR</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS16X; ?><br>
<input type="text" name="PCIe_SLOTS_x16"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS8X; ?><br>
<input type="text" name="PCIe_SLOTS_x8"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCIeSLOTS4X; ?><br>
<input type="text" name="PCIe_SLOTS_x4"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_MOTHERBOARD_PCISLOTS; ?><br>
<input type="text" name="PCI_SLOTS"><br>
  <br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>