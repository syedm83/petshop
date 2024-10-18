<?php
include("psproduct.php");
$PSProductID = $_GET['PSProductID'];
$product = PSProduct::findProduct($PSProductID);
$result = $product->removeProduct();
if ($result) {
   echo "<h2>Product $PSProductID removed</h2>\n";
} else {
   echo "<h2>Sorry, problem removing product $PSProductID</h2>\n";
}
?>
