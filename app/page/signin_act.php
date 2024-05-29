<?php
// Check if form data is posted
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        // Sanitize input to prevent SQL injection
        $username = mysqli_real_escape_string($koneksi, $username);
        $password = mysqli_real_escape_string($koneksi, $password);

        // Select user data with matching username and password
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $query);

        // Check the number of rows found
        $cek = mysqli_num_rows($result);

        // Check if username and password match the database
        if ($cek > 0) {
            $data = mysqli_fetch_assoc($result);

            // Create session for user data
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $data['id'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['alert'] = 'success_signin';

            // Redirect based on user role
            if ($data['role'] == 'admin' || $data['role'] == 'operator') {
                header("Location: ?page=profile&role=" . $_SESSION['role'] . "&alert=" . $_SESSION['alert']);
            } else if ($data['role'] == 'superadmin') {
                header("Location: ?page=profile&role=" . $_SESSION['role'] . "&alert=" . $_SESSION['alert']);
            } else {
                // Redirect to signin page if role not exist
                $_SESSION['alert'] = 'failed_signin';
                header("Location: ?page=signin&alert=" . $_SESSION['alert']);
                exit();
            }
        } else {
            // Redirect to signin page if login fails
            $_SESSION['alert'] = 'failed_signin';
            header("Location: ?page=signin&alert=" . $_SESSION['alert']);
            exit();
        }
    } else {
        // Handle empty username or password
        $_SESSION['alert'] = 'empty_fields';
        header("Location: ?page=signin&alert=" . $_SESSION['alert']);
        exit();
    }
?>
