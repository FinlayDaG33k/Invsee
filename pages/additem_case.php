<form action="inc/additem_case.php" method="POST">
<?php echo WORDING_ITEMBRAND; ?><br>
<input type="text" name="ITEM_BRAND"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CASE_MODEL; ?><br>
<input type="text" name="CASE_MODEL"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CASE_FORMFACTOR; ?><br>
<select name="CASE_FORMFACTOR">
  <option value="Midi Tower">Midi Tower</option>
  <option value="Small Tower">Small Tower</option>
  <option value="Big Tower">Big Tower</option>
  <option value="Rack">Rack</option>
  <option value="HTPC">HTPC</option>
</select><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CASE_EXPANSIONSLOTS; ?><br>
<input type="text" name="CASE_EXPANSIONSLOTS"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CASE_25INCHDRIVEBAY; ?><br>
<input type="text" name="CASE_25INCHDRIVEBAY"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CASE_35INCHDRIVEBAY; ?><br>
<input type="text" name="CASE_35INCHDRIVEBAY"><br>
<?php echo WORDING_ITEMCATEGORY_ITEM_CASE_5INCHDRIVEBAY; ?><br>
<input type="text" name="CASE_5INCHDRIVEBAY"><br>
  <br>
  <?php echo WORDING_ITEMSINSTOCK; ?><br>
<input type="int" name="item_stock"><br>
  <br />
<input type="submit" value="Submit">
</form>