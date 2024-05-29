<?php

// Check if the current session role is set, if not set it to 'notSign'
$role = $_SESSION['role'] ?? 'notSign';
$pembuat = $_SESSION['username'];


// Include your database connection file here
// require_once 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $judul = $_POST['judul'] ?? '';
    $deskripsi = $_POST['deskripsi'] ?? '';

    // Validate form data
    if (empty($judul) || empty($deskripsi)) {
        header("Location: ?page=dashboard&role=$role&alert=failed_form");
        exit();
    }

    // Check if an image is uploaded
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
    } else {
        // Use a default image if no image is uploaded
        $photo_news = 'default';
    }

    // Insert the isi_berita data into the database
    // Here, you need to replace $koneksi with your database connection variable
    // Also, ensure to properly sanitize input to prevent SQL injection
    $query = "INSERT INTO isi_berita (id, pembuat, judul, deskripsi, tanggal_input, berita_foto, approval) 
              VALUES (NULL, '$pembuat', '$judul', '$deskripsi', NOW(), '$photo_news', 'NOT_YET')";
    $result = mysqli_query($koneksi, $query); 
    if ($result) {
        header("Location: ?page=dashboard&role=$role&alert=create_berita");
        exit();
    }    
}
?>
