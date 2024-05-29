<?php

// Check if the current session role is set, if not set it to 'notSign'
$role = $_SESSION['role'] ?? 'notSign';

$nama = $_POST['nama'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'];
$role = $_POST['role'];

$user_id = $_POST['user_id'];
$userFotoSelect = $_POST['userFotoSelect'] ?? '';

// Fetch the current user data
$userData = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$user_id'");
$data = mysqli_fetch_array($userData);
$foto = $data['foto'];

// Handle the user photo selection
if ($userFotoSelect == "fotoGanti") {
    if ($foto != 'default' && file_exists($userDir.$foto)) {
        unlink($userDir.$foto);
    }
    if ($_FILES["foto"]["error"] !== 4) {
        $fileName = $_FILES["foto"]["name"];
        $fileSize = $_FILES["foto"]["size"];
        $tmpName = $_FILES["foto"]["tmp_name"];
    
        $validImageExtension = ['jpg', 'jpeg', 'png', 'gif'];
        $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
        // Check if the image extension is valid
        if (!in_array($imageExtension, $validImageExtension)) {
            header("Location: ?page=profile&role=$role&alert=gagal_ekstensi");
            exit();
        } elseif ($fileSize > 1044070) {
            // Check if the image size exceeds the limit
            header("Location: ?page=profile&role=$role&alert=gagal_ukuran");
            exit();
        }
    
        // Generate a unique filename for the image
        $photo_user = uniqid() . '.' . $imageExtension;
        $photoPath = $userDir . $photo_user; // Define the destination path for the image
    
        // Move the uploaded image to the user photo directory
        if (!move_uploaded_file($tmpName, $photoPath)) {
            header("Location: ?page=profile&role=$role&alert=failed_upload");
            exit();
        }
    }
} elseif ($userFotoSelect == "fotoDefault") {
    if ($foto != 'default' && file_exists($userDir.$foto)) {
        unlink($userDir.$foto);
    }
    $photo_user = 'default';
} else {
    // Foto Lama
    $photo_user = $foto;
}

$_SESSION['username'] = $username;
$_SESSION['role'] = $role;

$query = "UPDATE user SET nama='$nama', username='$username', password='$password', role='$role', foto='$photo_user' WHERE id='$user_id'";

// Update the user data
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("Location: ?page=profile&role=$role&alert=success_edit");
    exit();
} else {
    header("Location: ?page=profile&role=$role&alert=failed_edit");
    exit();
}
?>
