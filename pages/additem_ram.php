<form action="inc/additem_ram.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_RAM_MODEL; ?><br>
<input type="text" name="RAM_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_RAM_TYPE; ?><br>
<input type="text" name="RAM_TYPE"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_RAM_SIZE; ?><br>
<input type="text" name="RAM_SIZE">
<select name="RAM_SPEED_UNIT">
  <option value="GiB">GiB</option>
  <option value="MiB">MiB</option>
  <option value="KiB">KiB</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_RAM_SPEED; ?><br>
<input type="text" name="RAM_SPEED">
<select name="RAM_SPEED_UNIT">
  <option value="Ghz">Ghz</option>
  <option value="Mhz">Mhz</option>
  <option value="Hz">Hz</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_RAM_TIMINGS; ?><br>
<input type="text" name="RAM_TIMINGS"><br>
  <br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>