<?php

require_once('database.php');
class PSProduct
{
   public $PSProductID;
   public $PSProductCode;
   public $PSProductName;
   public $PSdescription;
   public $PSAisle_Number;
   public $PSCategoryID;
   public $PSWholesalePrice;
   public $PSListPrice;
   public $DateCreated;

   function __construct(
        $PSProductID,
        $PSProductCode,
        $PSProductName,
        $PSdescription,
        $PSAisle_Number,
        $PSCategoryID,
        $PSWholesalePrice,
        $PSListPrice,
        $DateCreated
   ) {
       $this->PSProductID = $PSProductID;
       $this->PSProductCode = $PSProductCode;
       $this->PSProductName = $PSProductName;
       $this->PSdescription = $PSdescription;
       $this->PSAisle_Number = $PSAisle_Number;
       $this->PSCategoryID = $PSCategoryID;
       $this->PSWholesalePrice = $PSWholesalePrice;
       $this->PSListPrice = $PSListPrice;
       $this->DateCreated = $DateCreated; 
   }

   function __toString()
   {
       $output = "<h2>Product ID: $this->PSProductID</h2>" .
                 "<h2>Code: $this->PSProductCode</h2>" .
                 "<h2>Name: $this->PSProductName</h2>" .
                 "<h2>Description: $this->PSdescription</h2>" .
                 "<h2>Aisle Number: $this->PSAisle_Number</h2>" .
                 "<h2>Category ID: $this->PSCategoryID</h2>" .
                 "<h2>Wholesale Price: $this->PSWholesalePrice</h2>" .
                 "<h2>List Price: $this->PSListPrice</h2>" .
                 "<h2>Date Created: $this->DateCreated</h2>";
       return $output;
   }

   function savePSProduct()
   {
       $db = getDB();
       $query = "INSERT INTO PSProducts VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isssidsd",
           $this->PSProductID,
           $this->PSProductCode,
           $this->PSProductName,
           $this->PSdescription,
           $this->PSAisle_Number,
           $this->PSCategoryID,
           $this->PSWholesalePrice,
           $this->PSListPrice
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }

   static function getPSProducts()
   {
       $db = getDB();
       $query = "SELECT * FROM PSProducts";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $products = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $product = new PSProduct(
                   $row['PSProductID'],
                   $row['PSProductCode'],
                   $row['PSProductName'],
                   $row['PSdescription'],
                   $row['PSAisle_Number'],
                   $row['PSCategoryID'],
                   $row['PSWholesalePrice'],
                   $row['PSListPrice'],
                   $row['DateCreated']
               );
               array_push($products, $product);
           }
           $db->close();
           return $products;
       } else {
           $db->close();
           return NULL;
       }
   }

   static function findPSProduct($PSProductID)
   {
       $db = getDB();
       $query = "SELECT * FROM PSProducts WHERE PSProductID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $PSProductID);
       $stmt->execute();
       $result = $stmt->get_result();
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $product = new PSProduct(
               $row['PSProductID'],
               $row['PSProductCode'],
               $row['PSProductName'],
               $row['PSdescription'],
               $row['PSAisle_Number'],
               $row['PSCategoryID'],
               $row['PSWholesalePrice'],
               $row['PSListPrice'],
               $row['DateCreated']
           );
           $db->close();
           return $product;
       } else {
           $db->close();
           return NULL;
       }
   }

   function updatePSProduct()
   {
       $db = getDB();
       $query = "UPDATE PSProducts SET PSProductCode = ?, PSProductName = ?, PSdescription = ?, " .
                "PSAisle_Number = ?, PSCategoryID = ?, PSWholesalePrice = ?, PSListPrice = ? WHERE PSProductID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "sssdidsi", 
           $this->PSProductCode,
           $this->PSProductName,
           $this->PSdescription,
           $this->PSAisle_Number,
           $this->PSCategoryID,
           $this->PSWholesalePrice,
           $this->PSListPrice,
           $this->PSProductID
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }

   function removePSProduct()
   {
       $db = getDB();
       $query = "DELETE FROM PSProducts WHERE PSProductID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $this->PSProductID);
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getTotalItems() {
    $db = getDB();
    $query = "SELECT count(PSProductID) FROM PSProducts";  
    $result = $db->query($query);
    $row = $result->fetch_array();
    if ($row) {
        return $row[0];
    } else {
        return NULL;
    }
 }
 
 static function getTotalListPrice() {
    $db = getDB();
    $query = "SELECT sum(PSListPrice) FROM PSProducts"; 
    $result = $db->query($query);
    $row = $result->fetch_array();
    if ($row) {
        return $row[0];
    } else {
        return NULL;
    }
 }
 

}
?>