<form action="inc/additem_mouse.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_MOUSE_MODEL; ?><br>
<input type="text" name="MOUSE_MODEL"><br>
  <br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>