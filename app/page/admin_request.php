<?php
        // Menangkap data yang dikirim dari form
        $user_id = $_GET['id'];

        $sql = $koneksi->query("SELECT * FROM user WHERE id='$id_user'");
    
        $data = $sql->fetch_assoc();

        // Ask Superadmin to Make Admin
        $verified = 'pending';
        $updateQuery = "UPDATE user SET role='admin', verified='$verified' WHERE id='$user_id'";
        $result = mysqli_query($koneksi, $updateQuery);

        if ($result) {
            echo "Data has been approved successfully.";
            header("Location: ?page=profile&role=$currentRole&alert=approval_success");
        } else {
            echo "Failed to update data.";
            header("Location: ?page=profile&role=$currentRole&alert=approval_failure");
        }
?>