<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($koneksi, $id);

    // Retrieve data from the table
    $dataBerita = mysqli_query($koneksi, "SELECT * FROM isi_berita WHERE id='$id'");

    if (mysqli_num_rows($dataBerita) > 0) {
        // Update the approval status to 'APPROVE'
        $approval = 'APPROVE';
        $updateQuery = "UPDATE isi_berita SET approval='$approval' WHERE id='$id'";
        $result = mysqli_query($koneksi, $updateQuery);

        if ($result) {
            echo "Data has been approved successfully.";
            header("Location: ?page=dashboard&role=admin&subPage=approve&alert=approval_success");
        } else {
            echo "Failed to update data.";
            header("Location: ?page=dashboard&role=admin&subPage=approve&alert=approval_failure");
        }
    } else {
        echo "Data not found.";
        header("Location: ?page=dashboard&role=admin&subPage=approve&alert=data_not_found");
    }
} else {
    echo "ID not provided.";
    header("Location: ?page=dashboard&role=admin&subPage=approve&alert=id_not_provided");
}
?>
