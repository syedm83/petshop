<?php

if (!isset($_REQUEST['PScategoryID']) or (!is_numeric($_REQUEST['PScategoryID']))) {
?>
   <h2>You did not select a valid PScategoryID to view.</h2>
   <a href="index.php?content=listpscategories">List Categories</a>
<?php
} else {
   $PScategoryID = $_REQUEST['PScategoryID'];
   $PScategory = PSCategory::findPSCategory($PScategoryID);
   if ($PScategory) {
       echo $PScategory;
       echo "<br><br>\n";
   } else {
       echo "<h2>Sorry, category $PScategoryID not found</h2>\n";
   }
}
?>
