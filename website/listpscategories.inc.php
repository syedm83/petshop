<script language="javascript">
   function listbox_dblclick() {
       document.categories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displaypscategory";
           if (target == 1) categories.action = "index.php?content=removepscategory";
           if (target == 2) categories.action = "index.php?content=updatepscategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Category</h2>
<form name="categories" method="post">
   <select ondblclick="listbox_dblclick()" name="PScategoryID" size="20">
<?php

//include("pscategory.php");
$PScategories = PSCategory::getPSCategories();
foreach($PScategories as $PScategory) {
   $PScategoryID = $PScategory->PScategoryID;
   $name = $PScategoryID . " - " . $PScategory->PScategoryCode . ", " . $PScategory->PScategoryName . "," . $PScategory->PScategoryModel;
   echo "<option value=\"$PScategoryID\">$name</option>\n";}
?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displaypscategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deletepscategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updatepscategory" value="Update Category">

</form>
