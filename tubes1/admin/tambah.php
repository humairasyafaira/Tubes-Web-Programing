<?php

require '../function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('data berhasil ditambahkan');
            window.location.href = 'berita.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambahkan');
            window.location.href = 'berita.php';
        </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background: rgb(31, 36, 0);
            background: linear-gradient(148deg, rgba(31, 36, 0, 1) 0%, rgba(149, 149, 149, 1) 0%, rgba(17, 39, 139, 1) 100%);
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="shadow-lg p-5 mt-5">
                    <h1 class="text-center">Form Tambah Data</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <select class="form-select" name="kategori">
                                <option selected>Kategori</option>
                                <option>Proyek</option>
                                <option>Kesehatan</option>
                                <option>Program Kerja</option>
                                <option>Wisata</option>
                                <option>Kuliner</option>
                                <option>Pendidikan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul :</label>
                            <input type="text" id="judul" name="judul" autocomplete="off" placeholder="Masukkan Judul" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label">Isi :</label>
                            <input type="text" id="isi" name="isi" autocomplete="off" placeholder="Masukkan isi" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar :</label>
                            <input type="file" id="gambar" name="gambar" placeholder="Masukkan gambar" required class="form-control">
                        </div>
                        .<div class="text-center">
                            <button type="submit" name="tambah" class="btn btn-dark">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>