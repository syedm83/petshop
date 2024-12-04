<!-- Manahil Syed, 10/30/2024, IT-202-005, Phase 3 assignment, ms379@njit.edu -->

<script language="javascript">
   function listbox_dblclick() {
       document.products.updatepsproduct.click()
   }


   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this product?");
       }
       if (userConfirmed) {
           if (target == 1) products.action = "index.php?content=removePSProduct";
           if (target == 2) products.action = "index.php?content=updatePSProduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Product</h2>
<form name="products" method="post">
    <select ondblclick="listbox_dblclick()" name="PSProductID" size="20" style="width: 1200px;">
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
    <br>
   <input type="submit" onClick="button_click(1)" name="removePSProduct" value="Delete PSProduct">
   <input type="submit" onClick="button_click(2)" name="updatePSProduct" value="Update PSProduct">
</form>

      