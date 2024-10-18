<?php
require_once('database.php');
class PSCategory
{
   public $PScategoryID;
   public $PScategoryCode;
   public $PScategoryName;
   public $PScategoryModel;
   function __construct($PScategoryID, $PScategoryCode, $PScategoryName, $PScategoryModel)
   {
       $this->PScategoryID = $PScategoryID;
       $this->PScategoryCode = $PScategoryCode;
       $this->PScategoryName = $PScategoryName;
       $this->PScategoryModel = $PScategoryModel;

   }
   function __toString()
{
    $output = "<h2>Category Number: $this->PScategoryID</h2>\n" .
              "<h2>$this->PScategoryCode, $this->PScategoryName, $this->PScategoryModel</h2>\n";
    return $output;
}
   public function savePSCategory() {
    // Get the database connection
    $db = getDB();

    // Prepare the SQL statement with placeholders for the values
    $query = "INSERT INTO PScategories (PScategoryID, PScategoryCode, PScategoryName, PScategoryModel, DateCreated) 
              VALUES (?, ?, ?, ?, NOW())";

    // Prepare the statement
    $stmt = $db->prepare($query);
    
    if (!$stmt) {
        // Output error if preparation failed
        die('Prepare failed: ' . $db->error);
    }

    // Bind parameters to the placeholders
    // i = integer, s = string
    $stmt->bind_param(
        "isss", // Expecting: integer, string, string, string
        $this->PScategoryID,       // integer
        $this->PScategoryCode,     // string
        $this->PScategoryName,     // string
        $this->PScategoryModel     // string
    );

    // Execute the prepared statement
    $result = $stmt->execute();
    
    if (!$result) {
        // Output error if execution failed
        die('Execute failed: ' . $stmt->error);
    }

    // Close the statement and database connection
    $stmt->close();
    $db->close();

    return $result;
}

   static function getPSCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM PScategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $PScategories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $PScategory = new PSCategory(
                   $row['PScategoryID'],
                   $row['PScategoryCode'],
                   $row['PScategoryName'],
                   $row['PScategoryModel']
               );
               array_push($PScategories, $PScategory);
               unset($PScategory);
           }
           $db->close();
           return $PScategories;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findPSCategory($PScategoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM PScategories WHERE PScategoryID = $PScategoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $PScategory = new PSCategory(
               $row['PScategoryID'],
               $row['PScategoryCode'],
               $row['PScategoryName'],
               $row['PScategoryModel']
           );
           $db->close();
           return $PScategory;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updatePSCategory()
{
    $db = getDB();
    $query = "UPDATE PScategories SET PScategoryCode = ?, PScategoryName = ?, PScategoryModel = ? WHERE PScategoryID = ?";
    
    $stmt = $db->prepare($query);
    if (!$stmt) {
        die('Prepare failed: ' . $db->error);
    }

    // Bind the parameters (3 strings and 1 integer)
    $stmt->bind_param(
        "sssi", // s = string, i = integer
        $this->PScategoryCode,     // string
        $this->PScategoryName,     // string
        $this->PScategoryModel,    // string
        $this->PScategoryID        // integer
    );

    $result = $stmt->execute();
    if (!$result) {
        die('Execute failed: ' . $stmt->error);
    }

    $stmt->close();
    $db->close();
    return $result;
}

   function removePSCategory()
   {
       $db = getDB();
       $query = "DELETE FROM PScategories WHERE PScategoryID = $this->PScategoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
}



