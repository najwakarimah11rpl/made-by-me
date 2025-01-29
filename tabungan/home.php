<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tabungan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #009688, #4CAF50); /* Green to teal gradient */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 900px;
            width: 100%;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: center;
            color: #333;
            border: 2px solid #795548; /* Brown border */
        }

        h1 {
            color: #4CAF50;
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .welcome-btn {
            background-color: #3b8f8e; /* Teal background */
            color: white;
            padding: 12px 25px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .welcome-btn:hover {
            background-color: #2c6b65; /* Darker teal for hover */
        }

        .footer {
            margin-top: 40px;
            color: #795548; /* Brown color for footer */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Tabungan!</h1>
    <p>Selamat datang di sistem tabungan kami. Di sini Anda dapat melakukan pengelolaan tabungan dengan mudah dan cepat.</p>
    <a href="saldo.php" class="welcome-btn">Mulai Tabungan</a>
    <div class="footer">
        <p>© 2025 Tabungan - Semua Hak Dilindungi</p>
    </div>
    
    <a href="header.php" class="back-button">Logout</a>
</div>

</body>
</html>
