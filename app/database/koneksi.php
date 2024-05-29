<?php 

$koneksi = mysqli_connect("localhost","root","","berita_warid");

// Check koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// // Berita Data
// $beritaData = mysqli_query($koneksi, "SELECT * FROM isi_berita");

// // User Data
// $userData = mysqli_query($koneksi, "SELECT * FROM user");

// // No
// $no = 1;
?>