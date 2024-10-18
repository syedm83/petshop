<?php
//Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu

include("psproduct.php");
$PSProductID = $_GET['PSProductID'];
$product = PSProduct::findProduct($PSProductID);
$product->PSProductID = $_GET['PSProductID'];
$product->PSProductCode = $_GET['PSProductCode'];
$product->PSProductName = $_GET['PSProductName'];
$product->PSdescription = $_GET['PSdescription'];
$product->PSAisle_Number = $_GET['PSAisle_Number'];
$product->PSCategoryID = $_GET['PSCategoryID'];
$product->PSWholesalePrice = $_GET['PSWholesalePrice'];
$product->PSListPrice = $_GET['PSListPrice'];
$result = $product->updateProduct();
if ($result) {
   echo "<h2>Product $PSProductID updated</h2>\n";
} else {
   echo "<h2>Problem updating product $PSProductID</h2>\n";
}
?>
