<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Catering - COD</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }

        h1 {
            margin: 0;
            font-size: 32px;
        }

        .header-button {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #ffffff;
            color: #ff6600;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .header-button:hover {
            background-color: #e65c00;
            color: white;
        }

        .container {
            width: 85%;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .menu-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .menu-item {
            background-color: #ffcc99;
            padding: 15px;
            border-radius: 10px;
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .menu-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .menu-item h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }

        .menu-item p {
            font-size: 16px;
            color: #555;
        }

        .menu-item input {
            padding: 8px;
            width: 60px;
            text-align: center;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .order-form {
            margin-top: 30px;
            text-align: center;
        }

        .order-form h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .order-form label {
            font-size: 16px;
            color: #333;
        }

        .order-form input[type="radio"] {
            margin-left: 10px;
        }

        .order-form input[type="submit"] {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
        }

        .order-form input[type="submit"]:hover {
            background-color: #e65c00;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 15px;
            background-color: #ff6600;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Catering!</h1>
        <button class="header-button" onclick="window.location.href='user.php'">Saya</button>
    </header>

    <div class="container">
        <h2>Pilih Menu Catering Anda</h2>
        <form action="order.php" method="POST">
            <div class="menu-list">
                <!-- Menu 1 -->
                <div class="menu-item">
                    <img src="nasi_goreng.jpg" alt="Nasi Goreng">
                    <h3>Nasi Goreng</h3>
                    <p>Rp 25,000</p>
                    <input type="number" name="nasi_goreng" value="0" min="0">
                </div>

                <!-- Menu 2 -->
                <div class="menu-item">
                    <img src="ayam_bakar.jpg" alt="Ayam Bakar">
                    <h3>Ayam Bakar</h3>
                    <p>Rp 30,000</p>
                    <input type="number" name="ayam_bakar" value="0" min="0">
                </div>

                <!-- Menu 3 -->
                <div class="menu-item">
                    <img src="rendang.jpg" alt="Rendang">
                    <h3>Rendang</h3>
                    <p>Rp 40,000</p>
                    <input type="number" name="rendang" value="0" min="0">
                </div>

                <!-- Menu 4 -->
                <div class="menu-item">
                    <img src="gado_gado.jpg" alt="Gado-Gado">
                    <h3>Gado-Gado</h3>
                    <p>Rp 20,000</p>
                    <input type="number" name="gado_gado" value="0" min="0">
                </div>

                <!-- New Menu 5 -->
                <div class="menu-item">
                    <img src="sate.jpg" alt="Sate Ayam">
                    <h3>Sate Ayam</h3>
                    <p>Rp 35,000</p>
                    <input type="number" name="sate_ayam" value="0" min="0">
                </div>

                <!-- New Menu 6 -->
                <div class="menu-item">
                    <img src="es_teh.jpg" alt="Es Teh">
                    <h3>Es Teh Manis</h3>
                    <p>Rp 5,000</p>
                    <input type="number" name="es_teh" value="0" min="0">
                </div>

                <!-- New Menu 7 -->
                <div class="menu-item">
                    <img src="kolak.jpg" alt="Kolak Pisang">
                    <h3>Kolak Pisang</h3>
                    <p>Rp 15,000</p>
                    <input type="number" name="kolak_pisang" value="0" min="0">
                </div>

                <!-- New Menu 8 -->
                <div class="menu-item">
                    <img src="mie_goreng.jpg" alt="Mie Goreng">
                    <h3>Mie Goreng</h3>
                    <p>Rp 20,000</p>
                    <input type="number" name="mie_goreng" value="0" min="0">
                </div>
            </div>

            <div class="order-form">
                <h3>Pilih Pembayaran</h3>
                <label for="cod">Cash On Delivery (COD)</label>
                <input type="radio" id="cod" name="payment_method" value="COD" required>
                <br><br>
                <input type="submit" value="Pesan Sekarang">
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Layanan Catering COD</p>
    </footer>
</body>
</html>
