<?php
//Manahil Syed, 10/30/2024, IT-202-005, Phase 3 assignment, ms379@njit.edu

if (!isset($_POST['PSProductID']) || !is_numeric($_POST['PSProductID'])) {
?>
    <h2>You did not select a valid PSProductID value</h2>
    <a href="index.php?content=listpsproducts">List Products</a>
<?php
} else {
    $PSProductID = $_POST['PSProductID']; 
    $product = PSProduct::findPSProduct($PSProductID); 

    if ($product) {
?>
        <h2>Update PSProduct <?php echo $product->PSProductID; ?></h2><br>
        <form name="items" action="index.php" method="post">
            <table>
                <tr>
                    <td>Product ID</td>
                    <td><?php echo $product->PSProductID; ?></td>
                </tr>
                <tr>
                    <td>Product Code</td>
                    <td><input type="text" name="PSProductCode" value="<?php echo htmlspecialchars($product->PSProductCode); ?>" required></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="PSProductName" value="<?php echo htmlspecialchars($product->PSProductName); ?>" required></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="PSdescription" required><?php echo htmlspecialchars($product->PSdescription); ?></textarea></td>
                </tr>
                <tr>
                    <td>Aisle Number</td>
                    <td><input type="text" name="PSAisle_Number" value="<?php echo htmlspecialchars($product->PSAisle_Number); ?>" required></td>
                </tr>
                <tr>
                    <td>Category ID</td>
                    <td><input type="text" name="PSCategoryID" value="<?php echo htmlspecialchars($product->PSCategoryID); ?>" required></td>
                </tr>
                <tr>
                    <td>Wholesale Price</td>
                    <td><input type="text" name="PSWholesalePrice" value="<?php echo htmlspecialchars($product->PSWholesalePrice); ?>" required></td>
                </tr>
                <tr>
                    <td>List Price</td>
                    <td><input type="text" name="PSListPrice" value="<?php echo htmlspecialchars($product->PSListPrice); ?>" required></td>
                </tr>
            </table><br><br>
            <input type="submit" name="answer" value="Update PSProduct">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="PSProductID" value="<?php echo $PSProductID; ?>">
            <input type="hidden" name="content" value="changepsproduct">
        </form>
<?php
    } else {
?>
        <h2>Sorry, product <?php echo $PSProductID; ?> not found</h2>
        <a href="index.php?content=listpsproducts">List products</a>
<?php
    }
}
?>
