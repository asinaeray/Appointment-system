<?php
require_once "baglan.php";

// Veritabanından randevu bilgisini getir
$randevusor = $db->prepare("SELECT * FROM randevu WHERE randevu_id = :id");
$randevusor->execute(array("id" => $_GET['randevu_id']));
$randevucek = $randevusor->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Cover Template · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS still goes here */
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-bg-dark">
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <!-- SVG symbols -->
</svg>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-5">
        <div>
            <h3 class="float-md-start mb-0">Randevu sistemi</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link fw-bold py-1 px-0" href="index.php">Kayıtlar</a>
                <a class="nav-link fw-bold py-1 px-0" href="kayitekle.php">Kayıt Ekle</a>
                <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="güncelle.php">Güncelle</a>
            </nav>
        </div>
    </header>

    <main class="px-0 w-100">
        <form class="row g-3" action="islem.php" method="post">
            <div class="col-md-6">
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($randevucek["ad"]); ?>" name="ad">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($randevucek["soyad"]); ?>" name="soyad">
            </div>
            <div class="col-12">
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($randevucek["tc"]); ?>" name="tc">
            </div>
            <div class="col-12">
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($randevucek["telefon"]); ?>" name="telefon">
            </div>
            <div class="col-12">
                <button type="submit" style="background-color: gray; color: white; padding: 10px; border: 0; border-radius: 10px;" name="gncbtn" value="<?php echo htmlspecialchars($randevucek["randevu_id"]); ?>">Güncelle</button>
            </div>
        </form>
    </main>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
