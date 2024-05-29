<div class="page">
    <?php 
    // Get the current role from session
    $currentRole = $_SESSION['role'] ?? 'notSign';

    // Include other pages based on the 'page' parameter
    if ($currentRole === 'superadmin') {
        $page = $_GET['page'] ?? 'dashboard';
        switch ($page) {
            case 'dashboard':
                include "./app/page/superadmin/dashboard_superadmin.php";
                break;
            case 'profile':
                include "./app/page/profile.php";
                break;
            case 'profile_edit':
                include "./app/page/profile_edit.php";
                break;
            case 'profile_update':
                include "./app/page/profile_update.php";
                break;
            case 'signout':
                include "./app/page/signout_act.php";
                break;
            case 'berita_view':
                include "./app/page/berita_view.php";
                break;
            case 'berita_delete':
                include "./app/page/delete_berita.php";
                break;
            case 'user_delete':
                include "./app/page/superadmin/delete_user.php";
                break;
            case 'user_verified':
                include "./app/page/superadmin/user_verified.php";
                break;
            case 'user_view':
                include "./app/page/user_view.php";
                break;
            default:
                include "./app/page/superadmin/dashboard_superadmin.php";
                break;
        }
    }
    else {
        $page = $_GET['page'] ?? 'home';
        switch ($page) {
            case 'home':
                include "./app/page/home.php";
                break;
            case 'news':
                include "./app/page/berita.php";
                break;
            case 'dashboard':
                include "./app/page/dashboard.php";
                break;
            case 'signin':
                include "./app/page/signin_form.php";
                break;
            case 'signin_act':
                include "./app/page/signin_act.php";
                break;
            case 'signup':
                include "./app/page/signup_form.php";
                break;
            case 'signup_act':
                include "./app/page/signup_act.php";
                break;
            case 'signout':
                include "./app/page/signout_act.php";
                break;
            case 'profile':
                include "./app/page/profile.php";
                break;
            case 'profile_edit':
                include "./app/page/profile_edit.php";
                break;
            case 'profile_update':
                include "./app/page/profile_update.php";
                break;
            case 'user_view':
                include "./app/page/user_view.php";
                break;
            case 'admin_request':
                include "./app/page/admin_request.php";
                break;
            case 'create_news':
                include "./app/page/create_berita.php";
                break;
            case 'approval_news':
                include "./app/page/approval_berita.php";
                break;
            case 'berita_view':
                include "./app/page/berita_view.php";
                break;
            case 'berita_edit':
                include "./app/page/berita_edit.php";
                break;
            case 'berita_delete':
                include "./app/page/delete_berita.php";
                break;
            default:
                include "./app/page/home.php";
                break;
        }
    }


    ?>
</div>