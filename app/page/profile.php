<?php 
$username = $_SESSION['username'] ?? '';
$userId = $_SESSION['id'] ?? '';
?>
<div class="page-user">
    <p>Halo <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>, Anda telah masuk sebagai <b><?php echo htmlspecialchars($_SESSION['role']); ?></b></p>
    <a href=" ?page=profile_edit&role=<?php echo $currentRole; ?>&id=<?php echo $id;?>"><i class="fa-solid fa-user-pen"></i></a>
</div>
<div class="user-profile-container">
    <div class="user-profile-card">
        <div class="user-profile-foto-container">
            <div class="user-profile-foto">
                <?php include "./assets/components/profile/profileFoto.php" ?>
            </div>
            <div class="user-profile-nama-role">
            <?php include "./assets/components/profile/profileNamaRole.php" ?>
            </div>
            <div class="user-profile-username">
                <?php include "./assets/components/profile/profileUsername.php" ?>
            </div>
        </div>
        <?php if($currentRole === 'admin' || $currentRole === 'operator'){ ?>
        <div class="track-record">
        <?php include "./assets/components/profile/profileTrackRecord.php" ?>
        </div>
        <?php } ?>
    </div>
</div>