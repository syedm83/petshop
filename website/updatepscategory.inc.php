<style>
   form[name="pscategory"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="pscategory"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="pscategory"] input[type="text"] {
       width: 100%;
   }
   form[name="pscategory"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$PScategoryID = $_POST['PScategoryID'];
$PScategory = PSCategory::findPSCategory($PScategoryID);
if ($PScategory) {
?>
   <h2>Update Category <?php echo $PScategoryID; ?></h2><br>
   <form name="PScategory" action="index.php" method="post">
       <label for="PScategoryCode">Category Code:</label>
       <input type="text" name="PScategoryCode" id="PScategoryCode" value="<?php echo $PScategory->PScategoryCode; ?>">
       <label for="PScategoryName">Category Name:</label>
       <input type="text" name="PScategoryName" id="PScategoryName" value="<?php echo $PScategory->PScategoryName; ?>">
       <label for="PScategoryModel">Category Model:</label>
       <input type="text" name="PScategoryModel" id="PScategoryModel" value="<?php echo $PScategory->PScategoryModel; ?>">
       <input type="submit" name="answer" value="Update PSCategory">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="PScategoryID" value="<?php echo $PScategoryID; ?>">
       <input type="hidden" name="content" value="changepscategory">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $PScategoryID; ?> not found</h2>
<?php
}
?>
<script language="javascript">
   document.category.categoryCode.focus();
   document.category.categoryCode.select();
</script>
