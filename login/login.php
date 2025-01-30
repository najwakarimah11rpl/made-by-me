<!-- login.php -->
<?php
session_start(); // Mulai sesi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil input dari form
    $username = $_POST['username'];

    // Validasi input (misal: cek jika kosong)
    if (empty($username)) {
        echo "<p class='error'>Nama harus diisi.</p>";
    } else {
        // Menyimpan informasi user ke dalam sesi
        $_SESSION['username'] = $username;

        // Arahkan ke halaman home setelah login berhasil
        header("Location: home.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(10px);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            letter-spacing: 2px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        input[type="text"]:focus {
            border-color: #2575fc;
            background-color: #fff;
            outline: none;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        input[type="submit"] {
            background-color: #2575fc;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #1a60d0;
        }

        .error {
            color: #ff4d4d;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <div class="form-group">
                <label for="username">Nama:</label>
                <input type="text" id="username" name="username" placeholder="Masukkan nama Anda" required>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>
