<?php
//Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu

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
    $db = getDB();

    $query = "INSERT INTO PScategories (PScategoryID, PScategoryCode, PScategoryName, PScategoryModel, DateCreated) 
              VALUES (?, ?, ?, ?, NOW())";

    $stmt = $db->prepare($query);
    
    if (!$stmt) {
        die('Prepare failed: ' . $db->error);
    }

    $stmt->bind_param(
        "isss", 
        $this->PScategoryID,       
        $this->PScategoryCode,     
        $this->PScategoryName,     
        $this->PScategoryModel    
    );

    $result = $stmt->execute();
    
    if (!$result) {
        die('Execute failed: ' . $stmt->error);
    }

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

    $stmt->bind_param(
        "sssi", 
        $this->PScategoryCode,     
        $this->PScategoryName,     
        $this->PScategoryModel,    
        $this->PScategoryID        
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



