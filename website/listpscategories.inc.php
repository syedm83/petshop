<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="PScategoryID" size="20">

<?php
//Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu

//include("pscategory.php");
$PScategories = PSCategory::getPSCategories();
foreach($PScategories as $PScategory) {
   $PScategoryID = $PScategory->PScategoryID;
   $name = $PScategoryID . " - " . $PScategory->PScategoryCode . ", " . $PScategory->PScategoryName . "," . $PScategory->PScategoryModel;
   echo "<option value=\"$PScategoryID\">$name</option>\n";}
?>
   </select>
</form>
