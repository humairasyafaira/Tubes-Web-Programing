<?php 

define('BASE_URL', 'http://localhost/pw2023_223040107/');

function koneksi(){
    $con= mysqli_connect("localhost","root","","tubes");
    return $con;

}
 
function query($query){
    $con = koneksi();
    $hasil= mysqli_query($con,$query); 
    $rows= [];
    
    while ($row= mysqli_fetch_assoc($hasil)){
        $rows[] = $row;

    } 
    return $rows;
}

function tambah($data){
    $conn = koneksi();
    $kategori = $data['kategori'];
    $judul = htmlspecialchars($data['judul']);
    $isi = htmlspecialchars($data['isi']);
    $gambar = upload();
    if (!$gambar){
        return false;
    }
    $query = "INSERT INTO berita VALUES (NULL, '$kategori', '$judul', '$gambar', '$isi')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4){
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    $gambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode('.', $namaFile);
    $ekstensi = strtolower(end($ekstensi));

    if (!in_array($ekstensi, $gambarValid)){
        echo "<script>alert('Hanya bisa mengupload gambar');</script>";
        return false;
    }

    if ($ukuranFile > 5000000){
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    $newFile = uniqid() . '.' . $ekstensi;

    move_uploaded_file($tmpName, '../img/uploaded/' . $newFile);
    return $newFile;
}

function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM berita WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();
    $id = $data['id'];
    $gambarLama = $data['gambarLama'];
    $kategori = $data['kategori'];
    $judul = $data['judul'];
    $isi = $data['isi'];
    $gambar = $data['gambar'];

    if($_FILES['gambar']['error'] === 4){
        $gambar === $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE berita SET
            kategori = '$kategori',
            judul = '$gambar',
            isi = '$isi',
            gambar = '$gambar'
            WHERE id = $id";

            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
}