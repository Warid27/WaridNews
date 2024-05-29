<?php 
    
    // Menangkap data yang dikirim dari form
    $id_user = $_GET['id'];

    $sql = $koneksi->query("SELECT * FROM user WHERE id='$id_user'");

    $data = $sql->fetch_assoc();

    $user_foto = $data['user_foto'];
    if (file_exists($userDir.$foto)) {
        unlink($userDir.$user_foto);
    }

    // Menghapus data dari database
    mysqli_query($koneksi, "DELETE FROM user WHERE id='$id_user'");

    // Mengalihkan halaman kembali ke view_buku.php
    header("Location: ?page=news&role=$currentRole&alert=user_hapus");
?>
