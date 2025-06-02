<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM users WHERE id='$id'") or die(mysqli_error($conn));
header("Location: data_pengguna.php");
?>
