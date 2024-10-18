<?php
//Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu

include('psproduct.php');
$PSProductID = $_GET['PSProductID'];
if ((trim($PSProductID) == '') or (!is_numeric($PSProductID))) {
   echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
   $PSProductCode = $_GET['PSProductCode'];
   $PSProductName = $_GET['PSProductName'];
   $PSdescription = $_GET['PSdescription'];
   $PSAisle_Number = $_GET['PSAisle_Number'];
   $PSCategoryID = $_GET['PSCategoryID'];
   $PSWholesalePrice = $_GET['PSWholesalePrice'];
   $PSListPrice = $_GET['PSListPrice'];

   $product = new PSProduct(
       $PSProductID,
       $PSProductCode,
       $PSProductName,
       $PSdescription,
       $PSAisle_Number,
       $PSCategoryID,
       $PSWholesalePrice,
       $PSListPrice,
       NULL
   );

   $result = $product->saveProduct();
   if ($result) {
       echo "<h2>New Product #$PSProductID successfully added</h2>\n";
   } else {
       echo "<h2>Sorry, there was a problem adding that product</h2>\n";
   }
}
?>
