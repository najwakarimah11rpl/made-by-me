<!-- welcome.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0066cc;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .welcome-container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 50px;
            border-radius: 15px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .welcome-message {
            font-size: 20px;
            margin-bottom: 40px;
            color: #f1f1f1;
        }

        .btn-home {
            background-color: #2575fc;
            color: white;
            padding: 12px 24px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-home:hover {
            background-color: #1a60d0;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>Selamat Datang!</h1>
        <p class="welcome-message">
            Terima kasih telah login! Kami senang Anda bergabung dengan kami.
        </p>
        <a href="home.php?username=<?php echo $_GET['username']; ?>">
            <button class="btn-home">Ke Halaman Home</button>
        </a>
    </div>
</body>

</html>
