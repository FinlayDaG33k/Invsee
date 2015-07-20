<form action="inc/additem_cpu.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CPU_MODEL; ?><br>
<input type="text" name="CPU_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET; ?><br>
<input type="text" name="CPU_SOCKET"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CPU_CORES; ?><br>
<input type="text" name="CPU_CORES"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CPU_CLOCKSPEED; ?><br>
<input type="text" name="CPU_CLOCKSPEED">
<select name="CPU_CLOCKSPEED_UNIT">
  <option value="Ghz">Ghz</option>
  <option value="Mhz">Mhz</option>
  <option value="Hz">Hz</option>
</select><br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>