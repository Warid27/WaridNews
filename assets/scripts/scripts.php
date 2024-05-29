<?php
include "./app/database/koneksi.php";
include "./assets/components/directory.php";
// Start session to use session variables if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$darkMode = isset($_SESSION['darkMode']) ? $_SESSION['darkMode'] : false;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Icon -->
        <link rel="icon" href="./assets/images/WN ICON.png">
        
        <title>Warid News</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        
        <!-- Alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Text Editor -->
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        
    </head>
    <body <?php echo $darkMode ? 'class="darkMode"' : ''; ?>>
        
        <?php 
        include "./app/auth/auth.php";
        include "./assets/alerts/alerts.php";
        ?>
        <!-- Header -->
        <?php
        include "./assets/components/header.php"; 
        include "./assets/scripts/page.php";
        ?>
        

        <!-- Custom Script -->
        <script src="./assets/js/script.js"></script>
        <?php include "./assets/scripts/darkmode.php" ?>
    </body>
</html>