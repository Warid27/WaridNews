<div class="berita-center">
    <h1 class="subTitle">Berita Populer</h1>
    <div class="berita-populer-container">
        <?php
        $populerBerita = mysqli_query($koneksi, "SELECT * FROM isi_berita WHERE approval = 'APPROVE' ORDER BY id DESC LIMIT 5");
        $index = 1;

        while ($berita = mysqli_fetch_array($populerBerita)) { ?>
            <a href="?page=berita_view&role=<?php echo $currentRole; ?>&id=<?php echo $berita['id']; ?>" class="berita-populer">
                <label><?php echo $index++; ?></label>
                <div>
                    <h1><?php echo $berita['judul']; ?></h1>
                    <p><?php echo $berita['tanggal_input']; ?></p>
                </div>
            </a>
        <?php } ?>
    </div>
</div>
