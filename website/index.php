<?php
//Manahil Syed, 9/25/2024, IT-202-005, Phase 1 assignment, ms379@njit.edu

session_start();
include("pscategory.php");
include("psproduct.php");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Pet Store Inventory</title>
  <link rel="stylesheet" type="text/css" href="ps_styles.css">
  <link rel="icon" type="image/png" href="images/mine.png">
  </head>


<body>
   <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 375px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
