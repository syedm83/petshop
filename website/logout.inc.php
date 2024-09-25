<?php
//Manahil Syed, 9/25/2024, IT-202-005, Phase 1 assignment, ms379@njit.edu
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
?>
