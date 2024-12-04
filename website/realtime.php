<?php
   ob_start(); // Start output buffering
   error_reporting(0); // Disable error reporting
   ini_set('display_errors', '0');

   require_once('pscategory.php');
   require_once('psproduct.php');

   $categoriesCount = PSCategory::getTotalCategories();
   $productsCount = PSProduct::getTotalItems();
   $listPriceTotal = PSProduct::getTotalListPrice();

   header('Content-Type: text/xml');
   echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<realtime>
    <categories><?php echo $categoriesCount; ?></categories>
    <items><?php echo $productsCount; ?></items>
    <listpricetotal><?php echo $listPriceTotal; ?></listpricetotal>
</realtime>

<?php
   ob_end_flush(); // End output buffering and flush the output
?>
