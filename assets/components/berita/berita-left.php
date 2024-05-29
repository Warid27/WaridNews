<div class="berita-left">
    <?php
    // Fetch the latest headline berita
    $headlineBerita = mysqli_query($koneksi, "SELECT * FROM isi_berita WHERE approval = 'APPROVE' ORDER BY id DESC LIMIT 1");
    $headline = mysqli_fetch_assoc($headlineBerita);

    // Fetch the latest subheadline berita, excluding the headline berita
    $subheadlineBerita = mysqli_query($koneksi, "SELECT * FROM isi_berita WHERE approval = 'APPROVE' AND id != {$headline['id']} ORDER BY id DESC LIMIT 6");
    ?>

    <a href="?page=berita_view&role=<?php echo $currentRole; ?>&id=<?php echo $headline['id']; ?>" class="headline-berita">
        <label>Headline</label>
        <h1><?php echo $headline['judul']; ?></h1>
        <div class="berita-foto">
            <?php if ($headline['berita_foto'] == 'default') { ?>
                <i class="fa-solid fa-news"></i>
            <?php } else { ?>
                <img src="<?php echo $beritaDir . $headline['berita_foto']; ?>">
            <?php } ?>
        </div>
    </a>

    <div class="subheadline-berita">
        <?php while ($subheadline = mysqli_fetch_array($subheadlineBerita)) { ?>
            <a href="?page=berita_view&role=<?php echo $currentRole; ?>&id=<?php echo $subheadline['id']; ?>" class="berita-subheadline">
                <div class="berita-foto">
                    <?php if ($subheadline['berita_foto'] == 'default') { ?>
                        <i class="fa-solid fa-newspaper"></i>
                    <?php } else { ?>
                        <img src="<?php echo $beritaDir . $subheadline['berita_foto']; ?>">
                    <?php } ?>
                </div>
                <h1><?php echo $subheadline['judul']; ?></h1>
            </a>
        <?php } ?>
    </div>
</div>
