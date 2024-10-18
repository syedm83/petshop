<?php
//Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu
include("pscategory.php");
$PScategoryID = $_GET['PScategoryID'];
if ((trim($PScategoryID) == '') or (!is_numeric($PScategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $PScategoryCode = $_GET['PScategoryCode'];
  $PScategoryName = $_GET['PScategoryName'];
  $PScategoryModel = $_GET['PScategoryModel'];

  $PScategory = new PSCategory($PScategoryID, $PScategoryCode, $PScategoryName, $PScategoryModel);
  $result = $PScategory->savePSCategory();
  if ($result) {
      echo "<h2>New Category #$PScategoryID successfully added</h2>\n";
      echo "<h2>$PScategory</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
