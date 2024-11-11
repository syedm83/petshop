<h2>Enter New Category Information</h2>
<form name="newpscategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
          <td>Category ID:</td>
          <td><input type="number" name="PScategoryID" size="4" min="1000" max="9999" required></td>
       </tr>
       <tr>
         <td>Category Code:</td>
        <td><input type="text" name="PScategoryCode" size="20" placeholder="XXX" minlength="3" required></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="PScategoryName" size="50" required></td>
       </tr>
       <tr>
           <td>Category Model:</td>
           <td><input type="text" name="PScategoryModel" size="50" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addpscategory">
</form>

