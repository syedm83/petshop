<style>
 form[name="login"] {
   display: grid;
   grid-template-columns: 100px 1fr;
   gap: 10px 5px;
   align-items: center;
   max-width: 300px;
 }
 form[name="login"] label {
   text-align: right;
   padding-right: 5px;
 }
 form[name="login"] input[type="text"],
 form[name="login"] input[type="password"] {
   width: 100%;
 }
 form[name="login"] input[type="submit"] {
   grid-column: 2;
   justify-self: start;
 }
</style>

<?php
//Manahil Syed, 9/25/2024, IT-202-005, Phase 1 assignment, ms379@njit.edu
if (!isset($_SESSION['login'])) {
?>
  <h2>Please log in to the Pet Shop Inventory Website</h2><br>
  <form name="login" action="index.php" method="post">
    <label>Email:</label>
    <input type="text" name="emailAddress" size="20">
   <!-- <br> -->
   <!-- <br> -->

    <label>Password:</label>
    <input type="password" name="password" size="20">
   <!-- <br> -->
   <!-- <br> -->

    <input type="submit" value="Login">
    <input type="hidden" name="content" value="validate">
  </form>
  
  <?php
} else {
   echo "<h2>Welcome to the Pet Supplies online store, {$_SESSION['login']}</h2>";
?>
   <br><br>
   <p>From here, you can track category and product information!</p>
   <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>

