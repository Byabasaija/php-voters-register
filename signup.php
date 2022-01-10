<?php
//include connection
include('db_connect.php');

//capture data from the form
$nin=$_POST['nin'];
$firstname=$_POST['firstname'];
$secondname=$_POST['secondname'];
$dob=$_POST['dob'];
$nationality=$_POST['nationality'];
$pollstation=$_POST['pollstation'];

//insert records into student table
$insert="INSERT INTO voters
	VALUES('$nin', '$firstname', '$secondname', $dob,  '$pollstation', '$nationality')";

//execute sql query
$exeinsert = mysqli_query($conn, $insert);

//check successfull db creation
if(!$exeinsert){
die("Record not added!" .mysqli_error($conn));
}
else{
    
header("Location: login.html");
echo 'One record added to the voters table!';
}
?>
