<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bungkus">
        <div class="glass">
            <br />
            <a href="data_pengguna.php">Lihat Semua Data</a>
            <br />
            <h3>Edit Data</h3>

            <?php
            session_start();
            include "koneksi.php";  
            $id = $_GET['id'];  
            $sql = "SELECT * FROM pengguna WHERE id_pengguna='$id'"; 
            $result2 = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result2)) {
            ?>
            <form action="update.php" method="post" class="bungkus">
                    <div>
                        <label>ID Pengguna</label>
                            <input type="hidden" name="id_pengguna" value="<?php echo $row[0]; ?>"> 
                            <?php echo $row[0]; ?>
                    </div>
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $row[1]; ?>" required>
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="" placeholder="">
                    </div>
                        <button type="submit">Submit</button>
                    
            </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>
