<?php
// include("pscategory.php");
if (isset($_SESSION['login'])) {
    $PScategoryID = filter_input(INPUT_POST, 'PScategoryID', FILTER_VALIDATE_INT);
    
    if (trim($PScategoryID) == '' || !is_int($PScategoryID)) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
    } else if (PSCategory::findPSCategory($PScategoryID)) {
        echo "<h2>Sorry, A category with the ID #$PScategoryID already exists</h2>\n";
    } else {
        $PScategoryCode = htmlspecialchars($_POST['PScategoryCode']);
        $PScategoryName = htmlspecialchars($_POST['PScategoryName']);
        $PScategoryModel = htmlspecialchars($_POST['PScategoryModel']);
        
        $PScategory = new PSCategory($PScategoryID, $PScategoryCode, $PScategoryName, $PScategoryModel);
        $result = $PScategory->savePSCategory();
        
        if ($result) {
            echo "<h2>New Category #$PScategoryID successfully added</h2>\n";
            echo "<h2>" . htmlspecialchars($PScategory->PScategoryName) . "</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that category</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
