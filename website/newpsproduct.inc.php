<h2>Enter New Product Information</h2>
<form name="newpsproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="PSProductID" size="4" minlength="4" maxlength="4" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="PSProductCode" size="10" minlength="1" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="PSProductName" size="20" minlength="1" maxlength="20" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><textarea name="PSdescription" rows="4" cols="20" minlength="5" maxlength="9999" required></textarea></td>
       </tr>
       <tr>
           <td>Aisle Number:</td>
           <td><input type="text" name="PSAisle_Number" size="15" minlength="3" maxlength="3"required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="PSCategoryID" size="4" minlength="4" maxlength="4" required></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="number" name="PSWholesalePrice" size="10" required step="0.01"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="PSListPrice" size="10" required step="0.01"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addpsproduct">
</form>
