<?php 
 include('db_connect.php');
 
 $db="CREATE DATABASE voters_register";

 $exedb = mysqli_query($conn, $db);

 if(!$exedb){
     die("Database not created!".mysqli_error($conn));
 } else{
     echo "Database created";
 }

?>