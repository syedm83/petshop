-- Active: 1725560574054@@sql1.njit.edu@3306@ms379

<?php
//Manahil Syed, 9/25/2024, IT-202-005, Phase 1 assignment, ms379@njit.edu
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'ms379';
   $username = 'ms379';
   $password = 'forSQLmypassword!1';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("You are connected to the $host database!");
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
 }
 //getDB();
?>
