<?php
// gpa.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generasi Pencinta Alam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('bg.jpeg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            height: 100vh;
        }
        .overlay {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
        }
        .logo {
            width: 100px;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #7f8c8d;
            color: white;
            border-radius: 30px;
            margin: 8px 0;
        }
        .btn-custom:hover {
            background-color: #95a5a6;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="overlay text-center col-10 col-sm-6 col-md-4">
        <img src="logo.png" alt="Logo" class="logo">
        <h4>Generasi Pencinta Alam</h4>
        <p>SMK Canda Bhirawa Pare</p>
        
        <a href="https://www.instagram.com/gpa_smkcbpare" class="btn btn-custom btn-lg w-100">Instagram</a>
        <a href="https://www.tiktok.com/@gpa_smkcbpare" class="btn btn-custom btn-lg w-100">Tiktok</a>
        <a href="#" class="btn btn-custom btn-lg w-100">Nia</a>
        <a href="./dokumentasi" class="btn btn-custom btn-lg w-100">Drive Dokumentasi</a>
    </div>

</body>
</html>
