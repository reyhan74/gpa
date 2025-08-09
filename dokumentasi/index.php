<?php
// gpa.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generasi Pencinta Alam</title>
    <link rel="icon" href="../logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('../bg.jpeg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .overlay {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }
        .logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-right: 10px;
        }
        .btn-custom {
            background-color: #7f8c8d;
            color: white;
            border-radius: 30px;
            margin: 6px 0;
            font-size: 0.95rem;
            padding: 10px 15px;
        }
        .btn-custom:hover {
            background-color: #95a5a6;
        }
        .title-text {
            font-size: 1.1rem;
            font-weight: bold;
            line-height: 1.2;
        }
        .subtitle {
            font-size: 0.85rem;
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="overlay text-center">
        
        <!-- Header: Logo + Title -->
        <div class="d-flex align-items-center justify-content-center mb-3">
            <img src="../logo.png" alt="Logo" class="logo">
            <div>
                <div class="title-text">Generasi Pencinta Alam</div>
                <p class="subtitle">SMK Canda Bhirawa Pare</p>
            </div>
        </div>

        <!-- Tombol -->
        <a href="https://drive.google.com/drive/folders/1u1T2bKQS7AgDaYFfi0QInwghP-Fm0qYs?usp=drive_link" class="btn btn-custom w-100">DOKUMENTASI MINGGUAN</a>
        <a href="https://drive.google.com/drive/folders/1f-H92BOjx5zqRco8EcoKAQ9bLFX6fOSr?usp=drive_link" class="btn btn-custom w-100">RAT & PELANTIKAN</a>
        <a href="https://drive.google.com/drive/folders/1OTzlDwynYDmdcK0CbriUsczskx6QYkze?usp=drive_link" class="btn btn-custom w-100">DEMO EXTRA</a>
        <a href="https://drive.google.com/drive/folders/1rKcBSPoL1Sz_qLHm9U9o7uFVD1aTvCuN?usp=drive_link" class="btn btn-custom w-100">GEBYAR MERAH PUTIH</a>
        <a href="https://drive.google.com/drive/folders/1GbnEWQu_Xp6brXet4b0gvePP6QZfsGQc?usp=drive_link" class="btn btn-custom w-100">DIKLATSAR</a>
        <a href="https://drive.google.com/drive/folders/1aMiHLhGDQlV6Ina5ny5DHRX_wI8fCf03?usp=drive_link" class="btn btn-custom w-100">BUKBER GPA</a>
        <a href="https://drive.google.com/drive/folders/1TufiKSFp-23kqY6Mcm6AmEfZgbf1lLfJ?usp=drive_link" class="btn btn-custom w-100">PANJAT TEBING</a>
        <a href="https://drive.google.com/drive/folders/1idV451AEdqmponyczGGnfVhu6vX8Aoqa?usp=drive_link" class="btn btn-custom w-100">CLEAN UP</a>
        <a href="https://wa.me/+6281805256116" class="btn btn-custom w-100">TAMBAH FOTO</a>
    </div>

</body>
</html>
