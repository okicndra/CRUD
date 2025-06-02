<?php
session_start();
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $user_password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashed_password = md5($user_password); // ⚠️ Ganti dengan password_hash() untuk produksi

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 40px 30px;
            width: 100%;
            max-width: 400px;
            color: white;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 14px 16px;
            margin: 12px 0;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            outline: none;
            transition: 0.3s;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        input:focus {
            background-color: rgba(255, 255, 255, 0.3);
            border: 1px solid #fff;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #ffffff;
            color: #5c6bc0;
            font-weight: 600;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #f0f0f0;
        }

        .error {
            color: #ffb3b3;
            font-size: 14px;
            text-align: center;
            margin-top: 12px;
        }

        a {
            color: #e0e0e0;
            text-align: center;
            display: block;
            margin-top: 15px;
            font-size: 14px;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            color: #ffffff;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login to Your Account</h2>

    <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <a href="#">Forgot password?</a>
    <a href="#">Create an account</a>
</div>

</body>
</html>
