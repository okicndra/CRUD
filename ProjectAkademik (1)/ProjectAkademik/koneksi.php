<?php
$sname = "localhost";
$uname = "root";  
$password = "";  
$db_name = "db_akademik"; 

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
