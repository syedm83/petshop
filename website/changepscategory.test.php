<?php
include("pscategory.php");
$PScategoryID = $_GET['PScategoryID'];
$PScategory = PSCategory::findPSCategory($PScategoryID);
$PScategory->PScategoryID = $_GET['PScategoryID'];
$PScategory->PScategoryCode = $_GET['PScategoryCode'];
$PScategory->PScategoryName = $_GET['PScategoryName'];
$PScategory->PScategoryModel = $_GET['PScategoryModel'];
$result = $PScategory->updatePSCategory();
if ($result) {
   echo "<h2>Category $PScategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating Category $PScategoryID</h2>\n";
}
?>
