<?php 

$nama = $_POST['nama'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? '';
$verified = 'none';

// Check if all required fields are provided
if (empty($nama) || empty($username) || empty($password) || empty($role)) {
    header("Location: ?page=signup&role=notSign&alert=failed_form");
    exit();
}

if ($role === 'admin') {
    $role = 'operator';
    $verified = 'pending';
}
// Check if an image is uploaded
if ($_FILES["foto"]["error"] !== 4) {
    $fileName = $_FILES["foto"]["name"];
    $fileSize = $_FILES["foto"]["size"];
    $tmpName = $_FILES["foto"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png', 'gif'];
    $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Check if the image extension is valid
    if (!in_array($imageExtension, $validImageExtension)) {
        header("Location: ?page=signup&role=notSign&alert=gagal_ekstensi");
        exit();
    } elseif ($fileSize > 1044070) {
        // Check if the image size exceeds the limit
        header("Location: ?page=signup&role=notSign&alert=gagal_ukuran");
        exit();
    }

    // Generate a unique filename for the image
    $foto = uniqid() . '.' . $imageExtension;
    $userPath = $userDir . $foto; // Define the destination path for the image

    // Move the uploaded image to the user directory
    if (!move_uploaded_file($tmpName, $userPath)) {
        header("Location: ?page=signup&role=notSign&alert=failed_upload");
        exit();
    }
} else {
    // Use a default image if no image is uploaded
    $foto = 'default';
}

// Sanitize input to prevent SQL injection
$username = mysqli_real_escape_string($koneksi, $username);
$password = mysqli_real_escape_string($koneksi, $password);

// Check if the username already exists in the database
$query = "SELECT * FROM user WHERE nama='$nama'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    header("Location: ?page=signup&role=notSign&alert=query_error");
    exit();
}

$cek = mysqli_num_rows($result);

if ($cek > 0) {
    header("Location: ?page=signup&role=notSign&alert=failed_signup_nama");
    exit();
}

// Insert the user data into the database
$query = "INSERT INTO user (nama, username, password, role, foto, verified) VALUES ('$nama', '$username', '$password', '$role', '$foto', '$verified')";
if (!mysqli_query($koneksi, $query)) {
    header("Location: ?page=signup&role=notSign&alert=failed_insert");
    exit();
}

// Set session data based on the user's role
$_SESSION['username'] = $username;
$_SESSION['role'] = $role;

// Redirect to the appropriate page
if (($role === 'admin' && $verified === 'verified') || $role === 'operator') {
    // Create session for user data
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    // Check the number of rows found
    $cek = mysqli_num_rows($result);

    // Check if username and password match the database
        $data = mysqli_fetch_assoc($result);

        // Create session for user data
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
        $_SESSION['role'] = $data['role'];

        // Redirect based on user role
        header("Location: ?page=profile&role=" . $_SESSION['role'] . "&alert=success_signup");
        exit();
} else {
    header("Location: ?page=signup&role=notSign&alert=failed_signup");
    exit();
}
?>
