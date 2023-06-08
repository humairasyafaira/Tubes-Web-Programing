<?php 

require '../function.php';

$query = query("SELECT * FROM berita");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Admin</title>
  <link rel="stylesheet" href="admin.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>

  <header class="header">
    <div class="logo">
      <a href="#">Admin</a>
      <div class="search_box">
        <input type="text" placeholder="Search ">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
      </div>
      <div class="navbar-nav">
        <a href="#beranda">Beranda</a>
      </div>
    </div>


  </header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="#dashboard" class="active">Dashboard</a>
        <a href="berita.php">Berita</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Dashboard</h2>
      <div class="promo_card">
        <h1> Admin Sizelton</h1>
        <span>Berita yang telah anda upload.</span>
        <!-- <button>Learn More</button> -->
      </div>

      <div class="history_lists" id="dashboard">
        <div class="list1">
          <div class="row">
            <h4>History</h4>
            <!-- <a href="#">See all</a> -->
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Isi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach($query as $berita): ?> 
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $berita['judul']; ?></td>
                <td><img src="../img/uploaded/<?= $berita['gambar']; ?>" alt="<?= $berita['gambar']; ?>" width="100px"></td>
                <td><?= $berita['isi']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>
</body>

</html>