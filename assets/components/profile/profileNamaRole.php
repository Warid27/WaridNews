<?php 
    // Fetch the user data from the database
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
    if ($data) {
        while ($userIsi = mysqli_fetch_array($data)) {
?>
<h1>
    <span><?php echo $userIsi['nama'] ?></span>
    <span><?php echo $userIsi['role'] ?></span>
</h1>
<?php 
        }
    }
?>