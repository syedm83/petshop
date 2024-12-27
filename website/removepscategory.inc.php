<?php

//error_log("\$_GET " . print_r($_GET, true));
//include("pscategory.php");
if (isset($_SESSION['login'])) {
$PScategoryID = $_POST['PScategoryID'];
$PScategory = PSCategory::findPSCategory($PScategoryID);
$result = $PScategory->removePSCategory();
if ($result)
   echo "<h2>Category $PScategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $PScategoryID</h2>\n";
} else {
   echo "<H2>Please login first</h2>\n";
}

?>