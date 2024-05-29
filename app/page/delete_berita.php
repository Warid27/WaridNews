<?php 
    
    // Menangkap data yang dikirim dari form
    $id_berita = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM isi_berita WHERE id='$id_berita'");

    $data = $sql->fetch_assoc();
    
    $berita_foto = $data['berita_foto'];
    if (file_exists($beritaDir.$berita_foto)) {
        unlink($beritaDir.$berita_foto);
    }

    // Menghapus data dari database
    mysqli_query($koneksi, "DELETE FROM isi_berita WHERE id='$id_berita'");

    // Mengalihkan halaman kembali ke view_buku.php
    header("Location: ?page=dashboard&role=$currentRole&alert=berita_hapus");
?>
