
<?php
$role = $_SESSION['role'] ?? 'notSign';
?>

<?php if ($role === 'superadmin') : ?>
<div class="dashboard-container">
    <div class="dashboard-nav-container">
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=dashboard-home">Home</a>
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=table-berita">Berita</a>
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=table-user">User</a>
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=table-verified">verified</a>
    </div>
    <!-- Dashboard content -->
    <div class="subPage">
        <?php
        $subPage = $_GET['subPage'] ?? 'home';
        switch ($subPage) {
            case 'dashboard-home':
                include "./assets/components/superadmin/dashboard_home.php";
                break;
            case 'table-berita':
                include "./assets/components/superadmin/table_berita.php";
                break;
            case 'table-user':
                include "./assets/components/superadmin/table_user.php";
                break;
            case 'table-verified':
                include "./assets/components/superadmin/table_verified.php";
                break;
            default:
                include "./assets/components/superadmin/dashboard_home.php";
                break;
        }
        ?>
    </div>
</div>
    <?php endif; ?>