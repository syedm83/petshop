<?php

//include("psproduct.php");
if (isset($_SESSION['login'])) {
   $PSProductID = $_POST['PSProductID'];
   $answer = $_POST['answer'];
   if ($answer == "Update PSProduct") {
      $PSproduct = PSProduct::findPSProduct($PSProductID);
      $PSproduct->PSProductCode = $_POST['PSProductCode'];
      $PSproduct->PSProductName = $_POST['PSProductName'];
      $PSproduct->PSdescription = $_POST['PSdescription'];
      $PSproduct->PSAisle_Number = $_POST['PSAisle_Number'];
      $PSproduct->PSCategoryID = $_POST['PSCategoryID'];
      $PSproduct->PSWholesalePrice = $_POST['PSWholesalePrice'];
      $PSproduct->PSListPrice = $_POST['PSListPrice'];
      $result = $PSproduct->updatePSProduct();
      if ($result) {
         echo "<h2>Product $PSProductID updated</h2>\n";
      } else {
         echo "<h2>Problem updating product $PSProductID</h2>\n";
      }
      } else {
         echo "<h2>Update Canceled for product $PSProductID</h2>\n";
         }
   } else {
      echo "<h2>Please login first</h2>\n";
   }
?>
