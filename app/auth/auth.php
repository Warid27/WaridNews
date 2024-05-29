<?php

// Set default role, page, and alert
$defaultRole = 'notSign';
$defaultPage = 'home';
$defaultAlert = 'none';

// Check if the 'page' parameter is not set
if (!isset($_GET['page'])) {
    // Set the role and alert to default if not already set in session
    if (!isset($_SESSION['role'])) {
        $_SESSION['role'] = $defaultRole;
    }
    if (!isset($_SESSION['alert'])) {
        $_SESSION['alert'] = $defaultAlert;
    }
    
    // Redirect to the default page with role and alert parameters
    $currentRole = $_SESSION['role'];
    header("Location: ?page=$defaultPage&role=$currentRole");
    exit();
}

// Capture the current role and alert from the session or from GET parameters
$currentRole = $_SESSION['role'] ?? $defaultRole;
$currentAlert = $_SESSION['alert'] ?? $defaultAlert;

// Set the page from the GET parameter
$page = $_GET['page'] ?? $defaultPage;

$userNotSignParams = (($currentRole === 'admin' || $currentRole === 'operator') || $page === 'profile' || $page === 'dashboard' || $page === 'profile_edit') && (!isset($_SESSION['username']) || !isset($_SESSION['id']));

// If user notSign
if ($userNotSignParams) {
    // Set currentRole to default before redirecting
    $_SESSION['role'] = $defaultRole;
    header("Location: ?page=signin&role=$defaultRole&alert=notSign");
    exit();
} else {
    // Ensure the role from the URL matches the session role
    if (isset($_GET['role']) && $_GET['role'] !== $currentRole) {
        $_SESSION['alert'] = 'manipulate';
        $currentAlert = $_SESSION['alert'];
        header("Location: ?page=$page&role=$currentRole&alert=$currentAlert");
        exit();
    }
}

$user_is_signin = isset($_SESSION['username']) && isset($_SESSION['id']);
// If user is logged in, get the user ID from the session
if ($user_is_signin) {
    $id = $_SESSION['id'];
}
?>

<script>
    var role = "<?php echo $currentRole; ?>";
</script>
