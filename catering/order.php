<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menu yang dipilih
    $nasi_goreng = isset($_POST['nasi_goreng']) ? $_POST['nasi_goreng'] : 0;
    $ayam_bakar = isset($_POST['ayam_bakar']) ? $_POST['ayam_bakar'] : 0;
    $rendang = isset($_POST['rendang']) ? $_POST['rendang'] : 0;
    $gado_gado = isset($_POST['gado_gado']) ? $_POST['gado_gado'] : 0;
    $sate_ayam = isset($_POST['sate_ayam']) ? $_POST['sate_ayam'] : 0;
    $es_teh = isset($_POST['es_teh']) ? $_POST['es_teh'] : 0;
    $kolak_pisang = isset($_POST['kolak_pisang']) ? $_POST['kolak_pisang'] : 0;
    $mie_goreng = isset($_POST['mie_goreng']) ? $_POST['mie_goreng'] : 0;
    $payment_method = $_POST['payment_method'];

    // Harga menu
    $harga_nasi_goreng = 25000;
    $harga_ayam_bakar = 30000;
    $harga_rendang = 40000;
    $harga_gado_gado = 20000;
    $harga_sate_ayam = 35000;
    $harga_es_teh = 5000;
    $harga_kolak_pisang = 15000;
    $harga_mie_goreng = 20000;

    // Hitung total
    $total = ($nasi_goreng * $harga_nasi_goreng) + 
             ($ayam_bakar * $harga_ayam_bakar) + 
             ($rendang * $harga_rendang) + 
             ($gado_gado * $harga_gado_gado) + 
             ($sate_ayam * $harga_sate_ayam) + 
             ($es_teh * $harga_es_teh) + 
             ($kolak_pisang * $harga_kolak_pisang) + 
             ($mie_goreng * $harga_mie_goreng);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan Catering</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff3e6;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 80%;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        h2 {
            color: #ff6600;
            border-bottom: 2px solid #ff6600;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details p {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .order-summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #ffcc99;
            border-radius: 8px;
        }

        .order-summary h3 {
            margin: 0 0 15px;
            color: #ff6600;
        }

        .total-price {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .payment-method {
            margin-top: 15px;
            font-size: 1.1rem;
        }

        footer {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }

    </style>
</head>
<body>

<header>
    <h1>Terima Kasih atas Pesanan Anda!</h1>
</header>

<div class="container">
    <h2>Detail Pesanan Anda</h2>
    
    <div class="order-details">
        <?php
        if ($nasi_goreng > 0) {
            echo "<p><strong>Nasi Goreng</strong>: $nasi_goreng x Rp 25,000 = Rp " . ($nasi_goreng * $harga_nasi_goreng) . "</p>";
        }
        if ($ayam_bakar > 0) {
            echo "<p><strong>Ayam Bakar</strong>: $ayam_bakar x Rp 30,000 = Rp " . ($ayam_bakar * $harga_ayam_bakar) . "</p>";
        }
        if ($rendang > 0) {
            echo "<p><strong>Rendang</strong>: $rendang x Rp 40,000 = Rp " . ($rendang * $harga_rendang) . "</p>";
        }
        if ($gado_gado > 0) {
            echo "<p><strong>Gado-Gado</strong>: $gado_gado x Rp 20,000 = Rp " . ($gado_gado * $harga_gado_gado) . "</p>";
        }
        if ($sate_ayam > 0) {
            echo "<p><strong>Sate Ayam</strong>: $sate_ayam x Rp 35,000 = Rp " . ($sate_ayam * $harga_sate_ayam) . "</p>";
        }
        if ($es_teh > 0) {
            echo "<p><strong>Es Teh Manis</strong>: $es_teh x Rp 5,000 = Rp " . ($es_teh * $harga_es_teh) . "</p>";
        }
        if ($kolak_pisang > 0) {
            echo "<p><strong>Kolak Pisang</strong>: $kolak_pisang x Rp 15,000 = Rp " . ($kolak_pisang * $harga_kolak_pisang) . "</p>";
        }
        if ($mie_goreng > 0) {
            echo "<p><strong>Mie Goreng</strong>: $mie_goreng x Rp 20,000 = Rp " . ($mie_goreng * $harga_mie_goreng) . "</p>";
        }
        ?>
    </div>

    <div class="order-summary">
        <h3>Total Pembayaran</h3>
        <p class="total-price">Rp <?php echo number_format($total, 0, ',', '.'); ?></p>
        
        <div class="payment-method">
            <?php
            if ($payment_method == "COD") {
                echo "<p><strong>Metode Pembayaran:</strong> Cash On Delivery (COD)</p>";
            }
            ?>
        </div>
    </div>

    <h3>Pesanan Anda akan segera diproses dan diantar ke alamat yang Anda berikan. Terima kasih telah memilih layanan catering kami!</h3>
        <button class="back-button" onclick="window.history.back()">Kembali</button>
    </div>

    <p>&copy; 2025 Layanan Catering - Semua hak dilindungi</p>
</footer>

</body>
</html>
