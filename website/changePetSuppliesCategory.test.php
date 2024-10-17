<?php
include("category.php");
$categoryID = $_GET['categoryID'];
$category = Category::findCategory($categoryID);
$category->PetSuppliesCategoryID = $_GET['categoryID'];
$category->PetSuppliesCategoryCode = $_GET['categoryCode'];
$category->PetSuppliesCategoryName = $_GET['categoryName'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $categoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $categoryID</h2>\n";
}
?>



