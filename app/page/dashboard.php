
<?php
$role = $_SESSION['role'] ?? 'notSign';
?>

<?php if ($user_is_signin) : ?>
<div class="dashboard-container">
    <div class="dashboard-nav-container">
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=home">Home</a>
        <?php if ($role === 'admin') : ?>
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=approve">Approve</a>
        <?php endif; ?>
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=create">Create</a>
        <?php if ($role === 'admin') : ?>
        <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=edit&id_berita=<?php echo $id_berita; ?>">Edit</a>
        <?php endif; ?>
    </div>
    <!-- Dashboard content -->
    <div class="subPage">
        <?php
        $subPage = $_GET['subPage'] ?? 'home';
        switch ($subPage) {
            case 'home':
                include "./assets/components/dashboard/dash-home.php";
                break;
            case 'approve':
                include "./assets/components/dashboard/dash-approve.php";
                break;
            case 'create':
                include "./assets/components/dashboard/dash-create.php";
                break;
            case 'edit':
                include "./assets/components/dashboard/dash-edit.php";
                break;
            default:
                include "./assets/components/dashboard/dash-home.php";
                break;
        }
        ?>
    </div>
</div>
<?php endif; ?>