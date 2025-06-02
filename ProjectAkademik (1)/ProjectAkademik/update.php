<?php
include "koneksi.php";

$id_pengguna = $_POST['id_pengguna'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($conn, "UPDATE pengguna SET username='$username', password='$password' WHERE id_pengguna='$id_pengguna'");

header('Location: data_pengguna.php');
?>
