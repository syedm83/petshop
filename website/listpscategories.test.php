<?php
//Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu

include("PScategory.php");
$PScategories = PSCategory::getPSCategories();
foreach($PScategories as $PScategory) {
   $PScategoryID = $PScategory->PScategoryID;
   $name = $PScategoryID . " - " . $PScategory->PScategoryCode . ", " . $PScategory->PScategoryName . "," . $PScategory->PScategoryModel;
   echo "$name<br>";
}
?>
