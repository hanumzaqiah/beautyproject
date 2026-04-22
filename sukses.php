<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesanan Berhasil - Innerlight</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 40px;
            background-color: #f9f9f9;
        }
        .success-box {
            background: #fff;
            padding: 30px;
            margin: auto;
            border-radius: 12px;
            max-width: 500px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .success-box h2 {
            color: #004B3D;
            margin-bottom: 10px;
        }
        .success-box p {
            font-size: 18px;
        }
        .btn-home {
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            background: #004B3D;
            color: white;
            border-radius: 6px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="success-box">
        <h2>🎉 Pesanan Berhasil!</h2>
        <p>Terima kasih telah berbelanja di Innerlight.</p>
        <p>Kami akan segera memproses pesananmu.</p>
        <a href="index.php" class="btn-home">Kembali ke Beranda</a>
    </div>
</body>
</html>
