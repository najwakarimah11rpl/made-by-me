<?php
// PHP Variables untuk konten halaman
$title = "Tabungan Keren";
$heroHeading = "Selamat Datang di Tabungan Keren!";
$heroSubheading = "Dengan Menabung, hidup lebih Keren! Menabung dengan Keamanan dan Kemudahan Terjamin!";
$ctaText = "Mulai Menabung Sekarang!";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        /* Header */
        header {
            background-color: #2e8b57; /* Hijau Tabungan Keren */
            color: white;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header .logo img {
            width: 50px;
            margin-right: 10px;
        }

        header nav ul {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            margin-right: 25px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            background-color: #32cd32; /* Hijau Terang */
            color: white;
            padding: 80px 20px;
            text-align: center;
            background-image: url('hero-bg.jpg');
            background-size: cover;
            background-position: center;
        }

        .hero h2 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .cta-btn {
            background-color: #ffffff;
            color: #2e8b57;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cta-btn:hover {
            background-color: #e0e0e0;
        }

        /* Features Section */
        .features {
            padding: 60px 20px;
            display: flex;
            justify-content: space-around;
            background-color: #ffffff;
        }

        .features h2 {
            text-align: center;
            font-size: 36px;
            width: 100%;
            margin-bottom: 40px;
        }

        .feature {
            text-align: center;
            width: 30%;
        }

        .feature img {
            width: 70px;
            margin-bottom: 20px;
        }

        .feature h3 {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .feature p {
            font-size: 16px;
        }

        /* Footer */
        footer {
            background-color: #2e8b57;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        footer ul li {
            display: inline;
            margin-right: 15px;
        }

        footer ul li a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        footer ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="logo.png" alt="Tabungan Keren Logo">
            <h1>Tabungan Keren</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Fitur</a></li>
                <!-- <li><a href="#">Promo</a></li> -->
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2><?php echo $heroHeading; ?></h2>
        <p><?php echo $heroSubheading; ?></p>
        <a href="daftar.php" class="cta-btn"><?php echo $ctaText; ?></a>
    </section>

    <!-- Features Section -->
    <section class="features">
        <h2>Fitur Unggulan Tabungan Keren</h2>
        <div class="feature">
            <img src="secure-icon.png" alt="Keamanan Terjamin">
            <h3>Keamanan Terjamin</h3>
            <p>Tabungan Anda aman dengan teknologi enkripsi tingkat tinggi.</p>
        </div>
        <div class="feature">
            <img src="easy-icon.png" alt="Transaksi Mudah">
            <h3>Transaksi Mudah</h3>
            <p>Akses kapan saja dan dimana saja, cukup lewat aplikasi!</p>
        </div>
        <div class="feature">
            <img src="high-interest-icon.png" alt="Bunga Tinggi">
            <h3>Bunga Tinggi</h3>
            <p>Nikmati bunga yang lebih tinggi dibandingkan tabungan konvensional.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Tabungan Keren. Semua hak cipta dilindungi.</p>
        <ul>
            <li><a href="#">Syarat & Ketentuan</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </footer>

</body>
</html>
