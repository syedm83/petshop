<!-- Manahil Syed, 10/30/2024, IT-202-005, Phase 3 assignment, ms379@njit.edu -->

<h2>Select Product</h2>
<form name="products" method="post">
    <select name="PSProductID" size="20" style="width: 1200px;">
        <?php
        //include("psproduct.php");
        $products = PSProduct::getPSProducts();

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
            echo "<option value=\"$PSProductID\">$option</option>\n"; 
        }
        ?>
    </select>
</form>

      