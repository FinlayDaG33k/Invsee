<form action="inc/additem_ssd.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SSD_MODEL; ?><br>
<input type="text" name="SSD_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SSD_CAPACITY; ?><br>
<input type="text" name="SSD_CAPACITY">
<select name="SSD_CAPACITY_UNIT">
  <option value="TiB">TiB</option>
  <option value="GiB">GiB</option>
  <option value="MiB">MiB</option>
  <option value="KiB">KiB</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SSD_INTERFACE; ?><br>
<select name="SSD_INTERFACE">
  <option value="SATA">SATA</option>
  <option value="SATA">SCSI</option>
  <option value="SAS">SAS</option>
  <option value="PCIe">PCIe</option>
  <option value="M.2">M.2</option>
  <option value="NVMe">NVMe</option>
  <option value="Fibre Channel">Fibre Channel</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SSD_FORMAT; ?><br>
<select name="SSD_FORMAT">
  <option value="2.5Inch">2.5Inch</option>
  <option value="3.5Inch">3.5Inch</option>
  <option value="5Inch">5Inch</option>
  <option value="Single Height">Single Height</option>
  <option value="Double Height">Double Height</option>
</select>
  <br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>