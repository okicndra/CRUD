<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH PENGGUNA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bungkus">
        <div class="glass">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            
            <h2>Tambah Pengguna</h2>

            <form action="proses_tambah.php" method="post" class="bungkus">
                <div class="labelinput">
                    <label for="id_pengguna">Id</label>
                    <input type="text" id="id_pengguna" name="id_pengguna" placeholder="Id Pengguna (userox)" required> <br>
                </div>
                <div class="labelinput">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" required> <br>
                </div>
                <div class="labelinput">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required> <br>
                </div>
                    
                
                <button type="submit">Tambah</button>
                <button type="reset">Reset</button>
            </form>
        </div>
    </div>
</body>
</html>
