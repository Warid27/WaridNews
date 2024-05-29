<?php

// Check if the current session role is set, if not set it to 'notSign'
$role = $_SESSION['role'] ?? 'notSign';

$judul = $_POST['judul'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';
$id_berita = $_POST['id_berita'];
$userFotoSelect = $_POST['userFotoSelect'] ?? '';

$beritaData = mysqli_query($koneksi, "SELECT * FROM isi_berita WHERE id='$id_berita'");
$data = mysqli_fetch_array($beritaData);
$berita_foto = $data['berita_foto'];


if ($userFotoSelect == "fotoGanti") {
    if (file_exists($beritaDir.$berita_foto)) {
        unlink($beritaDir.$berita_foto);
    
        if ($_FILES["berita_foto"]["error"] !== 4) {
            $fileName = $_FILES["berita_foto"]["name"];
            $fileSize = $_FILES["berita_foto"]["size"];
            $tmpName = $_FILES["berita_foto"]["tmp_name"];
        
            $validImageExtension = ['jpg', 'jpeg', 'png', 'gif'];
            $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
            // Check if the image extension is valid
            if (!in_array($imageExtension, $validImageExtension)) {
                header("Location: ?page=dashboard&role=$role&alert=gagal_ekstensi");
                exit();
            } elseif ($fileSize > 1044070) {
                // Check if the image size exceeds the limit
                header("Location: ?page=dashboard&role=$role&alert=gagal_ukuran");
                exit();
            }
        
            // Generate a unique filename for the image
            $photo_news = uniqid() . '.' . $imageExtension;
            $photoPath = $beritaDir . $photo_news; // Define the destination path for the image
        
            // Move the uploaded image to the isi_berita photo directory
            if (!move_uploaded_file($tmpName, $photoPath)) {
                header("Location: ?page=dashboard&role=$role&alert=failed_upload");
                exit();
            }
        }
    }
} elseif ($userFotoSelect == "fotoDefault") {
    if (file_exists($beritaDir.$berita_foto)) {
        unlink($beritaDir.$berita_foto);
        $photo_news = 'default';
    }
} else {
    // Foto Lama
    $photo_news = $berita_foto;
}

$query = "UPDATE isi_berita SET judul='$judul', deskripsi='$deskripsi', berita_foto='$photo_news' WHERE id='$id_berita'";

$result = mysqli_query($koneksi, $query); 
if ($result) {
    header("Location: ?page=dashboard&role=$role&alert=success_edit");
    exit();
}    
?>
