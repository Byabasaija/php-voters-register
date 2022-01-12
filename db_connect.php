<?php

$sname= "localhost";

$unmae= "root";

$password = "";
$db = "voters_register";

$conn = mysqli_connect($sname, $unmae, $password, $db);

if (!$conn) {
    echo "Connection failed!";
}else {
    echo "<h1>connected to server</h1>";
}
?>