<?php
include("PScategory.php");
$PScategories = PSCategory::getPSCategories();
foreach($PScategories as $PScategory) {
   $PScategoryID = $PScategory->PScategoryID;
   $name = $PScategoryID . " - " . $PScategory->PScategoryCode . ", " . $PScategory->PScategoryName . "," . $PScategory->PScategoryModel;
   echo "$name<br>";
}
?>
