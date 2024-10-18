<?php
include("psproduct.php");
$products = PSProduct::getProducts();
foreach ($products as $product) {
   $PSProductID = $product->PSProductID;
   $PSProductCode = $product->PSProductCode;
   $PSProductName = $product->PSProductName;
   $PSdescription = $product->PSdescription;
   $PSAisle_Number = $product->PSAisle_Number;
   $PSCategoryID = $product->PSCategoryID;
   $PSWholesalePrice = $product->PSWholesalePrice;
   $PSListPrice = $product->PSListPrice;
   $option = "$PSProductID - $PSProductCode - $PSProductName - $PSdescription - $PSAisle_Number - $PSCategoryID - $PSWholesalePrice - $PSListPrice";
   echo "$option<br>";
}
?>
