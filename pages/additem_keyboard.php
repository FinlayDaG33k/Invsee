<form action="inc/additem_keyboard.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_KEYBOARD_MODEL; ?><br>
<input type="text" name="KEYBOARD_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_KEYBOARD_SWITCHES; ?><br>
<select name="KEYBOARD_SWITCHES">
  <option value="Membrane">Membrane</option>
  <option value="Rubber Dome">Rubber Dome</option>
  <option value="Mechanical">Mechanical</option>
</select><br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>