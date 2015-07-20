<form action="inc/additem_screen.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_MODEL; ?><br>
<input type="text" name="SCREEN_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_RESOLUTION; ?><br>
<input type="text" name="SCREEN_RESOLUTION"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_SIZE; ?><br>
<input type="text" name="SCREEN_SIZE"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_SCREEN_CONNECTORS; ?><br>
<input type="text" name="SCREEN_CONNECTORS"><br>
  <br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>