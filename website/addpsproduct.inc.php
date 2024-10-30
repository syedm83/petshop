<?php
//Manahil Syed, 10/30/2024, IT-202-005, Phase 3 assignment, ms379@njit.edu

//include('psproduct.php');
if (isset($_SESSION['login'])) {
    $PSProductID = $_POST['PSProductID'];
    if ((trim($PSProductID) == '') or (!is_numeric($PSProductID))) {
        echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
    }
  else {
        $PSProductCode = htmlspecialchars($_POST['PSProductCode']);
        $PSProductName = htmlspecialchars($_POST['PSProductName']);
        $PSdescription = htmlspecialchars($_POST['PSdescription']);
        $PSAisle_Number = htmlspecialchars($_POST['PSAisle_Number']);
        $PSCategoryID = htmlspecialchars($_POST['PSCategoryID']);
        $PSWholesalePrice = htmlspecialchars($_POST['PSWholesalePrice']);
        $PSListPrice = htmlspecialchars($_POST['PSListPrice']);

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

        $result = $product->savePSProduct();
        if ($result) {
            echo "<h2>New Product #$PSProductID successfully added</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that product</h2>\n";
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
