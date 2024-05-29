<?php
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
        // Fetch the user data from the database
        $data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
        if ($data) {
            while ($userIsi = mysqli_fetch_array($data)) {
        ?>
        <?php if ($userIsi['foto'] == 'default') { ?>
            <div class="userIn"><i class="fa-solid fa-user"></i></div>
        <?php } else { ?>
            <img src="<?php echo $userDir.htmlspecialchars($userIsi['foto']); ?>" alt="Profile Picture" class="userIn">
        <?php } ?>
        <?php
            }
        } else {
            echo "<p>Error fetching user data.</p>";
        }
    }
?>