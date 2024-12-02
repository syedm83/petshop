<?php
//Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu

//include("pscategory.php");
if (isset($_SESSION['login'])) {
$PScategoryID = $_POST['PScategoryID'];
$answer = $_POST['answer'];
if ($answer == "Update PSCategory") {
$PScategory = PSCategory::findPSCategory($PScategoryID);
$PScategory->PScategoryID = $_POST['PScategoryID'];
$PScategory->PScategoryCode = $_POST['PScategoryCode'];
$PScategory->PScategoryName = $_POST['PScategoryName'];
$PScategory->PScategoryModel = $_POST['PScategoryModel'];
$result = $PScategory->updatePSCategory();
if ($result) {
   echo "<h2>Category $PScategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating Category $PScategoryID</h2>\n";
}
} else {
   echo "<h2>Update Canceled for category $PScategoryID</h2>\n";
}
} else {
echo "<h2>Please login first</h2>\n";
}

?>
