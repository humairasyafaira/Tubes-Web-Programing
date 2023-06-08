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
     
    <link rel="stylesheet" href="style.css">
    
    <!-- logo title bar -->
    <link rel="icon" href="img/logo.svg"
    type="image/x-icon">

    <title>Sizelton</title>

</head>
<body>
<!-- navbar -->

<nav class="navbar">

    <a href="#" class ="navbar-logo"><img src="img/logo.svg" alt="" width= 100px ></a>

    <div class="navbar-nav">
        <a href="#beranda">Beranda</a>
        <a href="#profil">Profil</a>
        <a href="#berita">Berita</a>
        <a href="#Layanan">Layanan Publik</a>
        <a href="login/login.php">Login</a>
    </div>

    <div class= "navbar-icons">

    </div>

</nav>

<!-- home -->
<div id="beranda"></div>
<div class="banner">
    <img src="img/hero banner.png" alt="" width = 1465px>
  </div>

<!-- profil -->
<div id= "profil">

    <h1><b>Profil Kota</b></h1>


    <div class="profil">
    
        <div class="profil-kota">
            <a href="profil/profil.php"><img src="img/profil.png" alt="" width= 160px></a>
            <h3>Profil</h3>
        </div>
        
        <div class="wali-kota">
            <a href="profil/walikota.php"><img src="img/walikota.png" alt="" width= 160px ></a>
            <h3>Wali Kota</h3>
        </div>
    
        <div class="visi-misi">
            <a href="profil/visimisi.php"><img src="img/visi misi.png" alt="" width= 160px></a>
            <h3>Visi Misi</h3>
        </div>
      </div>

</div>

  <!-- Berita -->
  <div id="berita"></div>

 <h1><b>Berita terbaru</b></h1>
 <div class="Berita">
 
     <div class="card-berita1">
         <a href="news1/news1.php"><img src="img/news1.png" alt="" width= 230px></a>
         <h3>Proyek</h3>
     </div>
     
     <div class="card-berita2">
         <a href="news1/news1.php"><img src="img/news2.png" alt="" width= 230px ></a>
         <h3>Kesehatan</h3>
     </div>
 
     <div class="card-berita3">
         <a href="news1/news1.php"><img src="img/news3.png" alt="" width= 230px></a>
         <h3>Program kerja</h3>
     </div>
     <div class="card-berita4">
        <a href="news1/news1.php"><img src="img/news4.png" alt="" width= 230px></a>
        <h3>wisata alam</h3>
    </div>
    <div class="card-berita5">
        <a href="news1/news1.php"><img src="img/news5.png" alt="" width= 230px></a>
        <h3>kuliner</h3>
    </div>
    <div class="card-berita6">
        <a href="news1/news1.php"><img src="img/news6.png" alt="" width= 230px></a>
        <h3>pendidikan</h3>
    </div>
   </div>

<!--layanan publik  -->
<div id="Layanan"></div>
<h1><b>Layanan publik</b></h1>

 <div class="layanan-publik">
 
     <div class="layanan-penduduk">
         <a href="https://jabarprov.go.id/layanan/kependudukan-dan-tempat-tinggal?nama=Kependudukan%20dan%20Tempat%20Tinggal&kategori=kependudukan">
            <img src="img/lp penduduk.png" alt="" width= 100px>
            <h3>Layanan kependudukan</h3>
            <p style="text-align: center;">
                Layanan pengecekan data kependudukan 
                berbasis Nomor Induk Kependudukan 
                (NIK) dan melakukan pengaduan terkait 
                data kependudukan.
            </p>
        </a>

            
     </div>

     <div class="layanan-kesehatan">
        <a href="https://jabarprov.go.id/layanan/kesehatan?nama=Kesehatan&kategori=kesehatan"><img src="img/lp kesehatan.png" alt="" width= 100px>
            <h3>Layanan kesehatan</h3>

            <p style="text-align: center;">
                Memberikan pelayanan pemeriksaan 
                kesehatan.  
            </a>
           
    </div>

    <div class="layanan-pendidikan">
        <a href="https://jabarprov.go.id/layanan/pendidikan-dan-pembelajaran?nama=Pendidikan%20dan%20Pembelajaran&kategori=pendidikan"><img src="img/lp pendidikan.png" alt="" width= 100px>
            <h3>Layanan pendidikan</h3>

        <p style="text-align: center;">
            Menciptakan sistem penerimaan
            siswa baru yang mengedepankan
            prinsip objektif, transparan,
            dan akuntabel, serta meningkatkan
            mutu layanan pendidikan yang 
            berkualitas dan daya saing merata.
            
       </p>
    </a>
           
    </div>

    <div class="layanan-pekerjaan">
        <a href="https://jabarjawara.id/"><img src="img/lp lowongan.png" alt="" width= 100px>
            <h3>Layanan tenagakerjaan</h3>

        <p style="text-align: center;">
            memberikan informasi seputar 
            lowongan pekerjaan, pengembangan
            diri dan beasiswa
            
       </p>
    </a>
           
    </div>
            






  

</body>
</html>