<?php

$role = $_SESSION['role'] ?? 'notSign';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    if ($username == 'deleted-user') {
?>
<div class="user-view-container-deleted">
    <h1>This User Has Been Deleted</h1>
    <i class="fa-solid fa-user-slash"></i>
</div>
<?php 
    }
    else {
        // Retrieve data from the table
        $userData = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
        if (mysqli_num_rows($userData) > 0) {
            $data = mysqli_fetch_assoc($userData);
?>
<div class="user-profile-container">
    <div class="user-profile-card">
        <div class="user-profile-foto-container">
            <div class="user-profile-foto">
                <?php include "./assets/components/user/userFoto.php" ?>
            </div>
            <div class="user-profile-nama-role">
            <?php include "./assets/components/user/userNamaRole.php" ?>
            </div>
            <div class="user-profile-username">
                <?php include "./assets/components/user/userUsername.php" ?>
            </div>
        </div>
        <div class="track-record">
        <?php include "./assets/components/user/userTrackRecord.php" ?>
        </div>
    </div>
</div>
<?php
        }
    }
}
?>
