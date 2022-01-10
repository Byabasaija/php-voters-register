<?php
//include connection
include('db_connect.php');

//create table
$table="CREATE TABLE voters(
	nin INT(5),
	firstname VARCHAR(20),
	secondname VARCHAR(20),
	yob INT(4),
	pollstation VARCHAR(20),
	nationality VARCHAR(20),
	PRIMARY KEY(nin)
	)";

//execute sql query
$exectable = mysqli_query($conn, $table);

//check successfull db creation
if(!$exectable){
die("Table not created!" .mysqli_error($conn));
}
else{
echo 'Table voters created!';
}
?>
