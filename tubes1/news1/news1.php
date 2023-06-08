<?php 

require "../function.php";

$query = query("SELECT * FROM berita");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
     
    <link rel="stylesheet" href="news1.css">
    
    <!-- logo title bar -->
    <link rel="icon" href="img/logo.svg"
    type="image/x-icon">

    <title>Berita</title>
</head>
<body>
    <!-- navbar -->

<nav class="navbar">

    <a href="#" class ="navbar-logo"><img src="img/logo.svg" alt="" width= 100px ></a>

    <div class="navbar-nav">
  
        <a href="../index.php">Beranda</a>
        <a href="../index.php">Profil</a>
        <a href="#../index.php">Berita</a>
        <a href="../index.php">Layanan Publik</a>
  
    </div>

    <div class= "navbar-icons">

    </div>

</nav>

<!-- isi berita -->

<div class="berita-proyek">
    
<?php foreach ($query as $berita): ?>

    <div class="proyek">
        <h1><?= $berita['judul']; ?></h1>
        <img src="../img/uploaded/<?= $berita['gambar']; ?>" alt="" width= 280px>
        <div class="teks-berita ">
            <p><?= $berita['isi']; ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>

</body>
</html>