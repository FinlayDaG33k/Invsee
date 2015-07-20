<form action="inc/additem_hdd.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_HDD_MODEL; ?><br>
<input type="text" name="HDD_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_HDD_CAPACITY; ?><br>
<input type="text" name="HDD_CAPACITY">
<select name="HDD_CAPACITY_UNIT">
  <option value="TiB">TiB</option>
  <option value="GiB">GiB</option>
  <option value="MiB">MiB</option>
  <option value="KiB">KiB</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_HDD_RPM; ?><br>
<input type="text" name="HDD_RPM"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_HDD_INTERFACE; ?><br>
<select name="HDD_INTERFACE">
  <option value="IDE">IDE</option>
  <option value="SATA">SATA</option>
  <option value="SATA">SCSI</option>
  <option value="SAS">SAS</option>
  <option value="Fibre Channel">Fibre Channel</option>
</select>
<?php echo WORDING_ITEMCATEGORY_ITEM_HDD_FORMAT; ?><br>
<select name="HDD_FORMAT">
  <option value="2.5Inch">2.5Inch</option>
  <option value="3.5Inch">3.5Inch</option>
  <option value="5Inch">5Inch</option>
</select>
  <br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>