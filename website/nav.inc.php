<!-- Manahil Syed, 10/30/2024, IT-202-005, Phase 3 assignment, ms379@njit.edu -->
<table width="100%" cellpadding="3">
   <?php
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
             <!-- <hr /> -->
           </td>
       </tr>
   <?php
   } else {
       echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
   ?>
       <tr>
           <td><img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;
           <a href="index.php"><strong>Home</strong></a></td>
       </tr>
       <tr>
           <td><img src="images/categ.png" alt="Categories Icon" width="12" height="12">&nbsp;
           <strong>Categories</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listpscategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newpscategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><img src="images/items.png" alt="Items Icon" width="12" height="12">&nbsp;
           <strong>Items</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listpsproducts">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newpsproduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
                   <img src="images/logout.png" alt="Logout Icon" width="12" height="12"></a>&nbsp;
                    <a href="index.php?content=logout">
                   <strong>Logout</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="text" name="PSProductID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updatePSProduct">
                   </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="PScategoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displaypscategory">
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>