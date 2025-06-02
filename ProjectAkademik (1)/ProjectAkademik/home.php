<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bungkus apaya">
        <div class="glass">
            <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
            <a class="ke" href="logout.php">LOGOUT</a>
            <a class="ke" href="data_pengguna.php">DATA PENGGUNA</a>
            <a class="ke" href="tambah_pengguna.php">TAMBAH PENGGUNA</a>
        </div>
    </div>
</body>
</html>
<?php

?>
