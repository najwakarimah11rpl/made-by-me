<?php
session_start(); // Mulai sesi

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Arahkan ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient biru dan ungu */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        /* Container Utama */
        .home-container {
            background-color: rgba(255, 255, 255, 0.95); /* Transparan putih */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            color: #6a11cb; /* Warna ungu */
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .welcome-message {
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
        }

        .btn-logout {
            background-color: #6a11cb; /* Warna ungu */
            color: white;
            padding: 14px 28px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
        }

        .btn-logout:hover {
            background-color: #5a0d9f; /* Warna ungu gelap saat hover */
            transform: translateY(-3px); /* Efek tombol terangkat saat hover */
        }

        .btn-logout:active {
            background-color: #4a0b8f; /* Warna ungu lebih gelap saat tombol ditekan */
            transform: translateY(2px); /* Efek saat tombol ditekan */
        }

        /* Tic-Tac-Toe */
        .ttt-board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 5px;
            margin-top: 30px;
            justify-items: center;
        }

        .ttt-cell {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            border: 2px solid #6a11cb; /* Warna ungu */
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            color: #6a11cb; /* Warna ungu */
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .ttt-cell.taken {
            cursor: not-allowed;
            color: #ccc;
        }

        .ttt-cell:hover {
            background-color: #6a11cb; /* Warna ungu saat hover */
            color: white;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .home-container {
                padding: 20px;
                max-width: 90%;
            }

            h1 {
                font-size: 28px;
            }

            .welcome-message {
                font-size: 16px;
            }

            .btn-logout {
                font-size: 16px;
            }

            .ttt-board {
                grid-template-columns: repeat(3, 80px);
                grid-template-rows: repeat(3, 80px);
                gap: 3px;
            }

            .ttt-cell {
                width: 80px;
                height: 80px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="home-container">
        <h1>Selamat Datang!</h1>
        <p class="welcome-message">
            Hi, <strong><?php echo $_SESSION['username']; ?>!</strong><br>
            Anda telah berhasil login ke halaman ini.
        </p>
        <a href="logout.php">
            <button class="btn-logout">Logout</button>
        </a>
        <h1>Game XOX</h1>

        <!-- Game Tic-Tac-Toe -->
        <div class="ttt-board" id="ttt-board">
            <div class="ttt-cell" id="cell-0"></div>
            <div class="ttt-cell" id="cell-1"></div>
            <div class="ttt-cell" id="cell-2"></div>
            <div class="ttt-cell" id="cell-3"></div>
            <div class="ttt-cell" id="cell-4"></div>
            <div class="ttt-cell" id="cell-5"></div>
            <div class="ttt-cell" id="cell-6"></div>
            <div class="ttt-cell" id="cell-7"></div>
            <div class="ttt-cell" id="cell-8"></div>
        </div>

        <button class="btn-logout" id="reset-btn">Reset Game</button>
    </div>

    <script>
        // Variabel game Tic-Tac-Toe
        const cells = document.querySelectorAll('.ttt-cell');
        let currentPlayer = 'X'; // Pemain pertama adalah X
        let gameBoard = ['', '', '', '', '', '', '', '', '']; // Menyimpan status sel
        let gameOver = false;

        // Fungsi untuk memulai atau mereset game
        function resetGame() {
            gameBoard = ['', '', '', '', '', '', '', '', '']; // Reset board
            gameOver = false;
            currentPlayer = 'X'; // Pemain X memulai
            cells.forEach(cell => {
                cell.textContent = ''; // Hapus teks di sel
                cell.classList.remove('taken'); // Hapus kelas "taken"
            });
        }

        // Fungsi untuk mengecek kemenangan
        function checkWinner() {
            const winPatterns = [
                [0, 1, 2], [3, 4, 5], [6, 7, 8], // Baris
                [0, 3, 6], [1, 4, 7], [2, 5, 8], // Kolom
                [0, 4, 8], [2, 4, 6] // Diagonal
            ];

            for (const pattern of winPatterns) {
                const [a, b, c] = pattern;
                if (gameBoard[a] && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]) {
                    alert(currentPlayer + ' Menang!');
                    gameOver = true;
                    return;
                }
            }

            // Cek jika game selesai (penuh)
            if (!gameBoard.includes('')) {
                alert('Seri!');
                gameOver = true;
            }
        }

        // Fungsi untuk menangani klik pada sel
        function handleCellClick(event) {
            const cellIndex = event.target.id.split('-')[1]; // Mendapatkan index sel
            if (gameBoard[cellIndex] === '' && !gameOver) {
                gameBoard[cellIndex] = currentPlayer; // Menandai sel dengan pemain saat ini
                event.target.textContent = currentPlayer; // Menampilkan tanda pemain
                event.target.classList.add('taken'); // Menandai sel sebagai telah diambil

                // Cek pemenang
                checkWinner();

                // Ganti giliran pemain
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            }
        }

        // Menambahkan event listener ke setiap sel
        cells.forEach(cell => {
            cell.addEventListener('click', handleCellClick);
        });

        // Menambahkan event listener untuk tombol reset
        document.getElementById('reset-btn').addEventListener('click', resetGame);
    </script>
</body>

</html>
