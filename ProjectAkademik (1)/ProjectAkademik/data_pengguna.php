<?php
session_start();
include "koneksi.php";

$sql = "SELECT * FROM users";
$result2 = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <div class="bungkus"> 
        <div class="glass">
            <h2>Data Pengguna</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_row($result2)) {
                        echo "<tr>";
                        echo "<td align='center'>" . $row[0] . "</td>";
                        echo "<td align='center'>" . $row[1] . "</td>"; 
                        echo "<td align='center'>" . $row[2] . "</td>";
                        echo "<td align='center'>
                                <a href='editdata.php?id=$row[0]' class='button'>EDIT</a> | 
                                <a href='hapusdata.php?id=$row[0]' class='button'>HAPUS</a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <a href="home.php" class="button">Back Home</a>
        </div>
    </div>

</body>
</html>
