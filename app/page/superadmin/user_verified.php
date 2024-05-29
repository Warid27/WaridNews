<?php
        // Menangkap data yang dikirim dari form
        $user_id = $_GET['id'];
        $verif = $_GET['verif'];

        $sql = $koneksi->query("SELECT * FROM user WHERE id='$id_user'");
    
        $data = $sql->fetch_assoc();

        if ($verif === 'yes') {
            // User Verified
            $verified = 'verified';
            $updateQuery = "UPDATE user SET role='admin', verified='$verified' WHERE id='$user_id'";
            $result = mysqli_query($koneksi, $updateQuery);
        } elseif ($verif === 'no'){
            // User Not Verified
            $verified = 'not verified';
            $updateQuery = "UPDATE user SET verified='$verified' WHERE id='$user_id'";
            $result = mysqli_query($koneksi, $updateQuery);
        }


        if ($result) {
            header("Location: ?page=dashboard&role=$currentRole&alert=verified");
        } else {
            header("Location: ?page=dashboard&role=$currentRole&alert=failed_verified");
        }
?>