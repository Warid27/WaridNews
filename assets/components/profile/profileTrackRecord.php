<?php

// Retrieve user data
$userData = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$userId'");
$userIsi = mysqli_fetch_assoc($userData);

// Retrieve news data
$newsData = mysqli_query($koneksi, "
    SELECT * 
    FROM isi_berita 
    WHERE pembuat = '{$userIsi['username']}' AND approval = 'APPROVE' 
    ORDER BY id DESC
");
$no = 1;

?>

<h3>Berita yang telah dibuat dan disetujui:</h3>
<div>
    <?php while ($news = mysqli_fetch_assoc($newsData)) { ?>
    <label>
        <span><?php echo $no++ . '.'; ?></span>
        <a href="?page=berita_view&id=<?php echo $news['id']; ?>">
            <?php echo htmlspecialchars($news['judul']); ?> - <?php echo htmlspecialchars($news['tanggal_input']); ?>
        </a>
    </label>
    <?php } ?>
</div>
