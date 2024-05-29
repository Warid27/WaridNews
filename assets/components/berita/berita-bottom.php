<div class="berita-bottom-container">
    <h1 class="subTitle">Berita Terkini</h1>
    <div class="berita-bottom">
        <?php 
        // Reset the pointer of the result set
        mysqli_data_seek($beritaData, 0);
        while ($beritaIsi = mysqli_fetch_array($beritaData)) { ?>
        <div class="card-berita">
            <a href="?page=berita_view&role=<?php echo $currentRole; ?>&id=<?php echo $beritaIsi['id']; ?>">
                <div class="card-berita-sampul">
                    <?php if ($beritaIsi['berita_foto'] == 'default') { ?>
                        <i class="fa-solid fa-newspaper"></i>
                    <?php } else { ?>
                        <img src="<?php echo $beritaDir.$beritaIsi['berita_foto']; ?>">
                    <?php } ?>
                </div>
                <div class="card-berita-deskripsi">
                    <div class="card-berita-judul"><?php echo $beritaIsi['judul']; ?></div>
                    <div class="card-berita-deskripsi-rinci">
                        <div class="card-beritaDesk pembuat">
                            <div><?php echo $beritaIsi['pembuat']; ?></div>
                        </div>
                        <div class="card-beritaDesk created_at">
                            <div><?php echo $beritaIsi['tanggal_input']; ?></div>
                        </div>
                    </div>
                    <div class="card-berita-aksi">
                        <a href="?page=berita_view&role=<?php echo $currentRole; ?>&id=<?php echo $beritaIsi['id']; ?>"><i class="fa-solid fa-eye"></i></a>
                        <?php if ($currentRole === 'admin') : ?>
                            <a href="?page=dashboard&role=<?php echo $currentRole; ?>&subPage=edit&id_berita=<?php echo $beritaIsi['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="?page=berita_delete&role=<?php echo $currentRole; ?>&id=<?php echo $beritaIsi['id']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                        <?php endif ?>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
