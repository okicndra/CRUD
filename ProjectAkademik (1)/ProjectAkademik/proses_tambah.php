<?php

include "koneksi.php";

$id_pengguna = $_POST['id_pengguna'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    if (empty($_POST['id_pengguna'])) {
        header("Location: tambah_pengguna.php?error=Masukkan id_pengguna");
        exit();
    } elseif (empty($_POST['username'])) {
        header("Location: tambah_pengguna.php?error=Masukkan username");
        exit();
    } elseif (empty($_POST['password'])) {
        header("Location: tambah_pengguna.php?error=Masukkan password");
        exit();
    } else {
        $sql = "INSERT INTO users (id, username, password) 
        VALUES ('$id_pengguna', '$username', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            header("Location: data_pengguna.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
