<form action="inc/additem_cpucooler.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CPUCOOLER_MODEL; ?><br>
<input type="text" name="CPU_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CPU_SOCKET; ?><br>
<input type="text" name="CPU_SOCKET"><br><br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>