<?php
//Manahil Syed, 10/30/2024, IT-202-005, Phase 3 assignment, ms379@njit.edu

include("psproduct.php");
$PSProductID = $_GET['PSProductID'];
$product = PSProduct::findPSProduct($PSProductID);
$result = $product->removePSProduct();
if ($result) {
   echo "<h2>Product $PSProductID removed</h2>\n";
} else {
   echo "<h2>Sorry, problem removing product $PSProductID</h2>\n";
}
?>
