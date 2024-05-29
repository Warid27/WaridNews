<?php if ($role === 'admin') { ?>
<section id="approve-news">
    <?php 
        $beritaData = mysqli_query($koneksi, "SELECT * FROM isi_berita");
        $userData = mysqli_query($koneksi, "SELECT * FROM user");
        $no = 1;
    ?>
    <h2>Approve News</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pembuat</th>
                <th>Judul</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
    <?php while ($beritaIsi = mysqli_fetch_array($beritaData)) {
        if ($beritaIsi['approval'] === 'NOT_YET') {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $beritaIsi['pembuat']; ?></td>
            <td>
                <div class="judulTable">
                    <?php echo $beritaIsi['judul']; ?></td>
                </div>
            <td>
                <div class="foto-berita-table">
                    <?php if ($beritaIsi['berita_foto'] == 'default') { ?>
                        <i class="fa-solid fa-newspaper"></i>
                    <?php } else { ?>
                        <img src="<?php echo $beritaDir.$beritaIsi['berita_foto']; ?>">
                    <?php } ?>
                </div>
            </td>
            <td>
                <a href="?page=berita_view&role=<?php echo $currentRole; ?>&id=<?php echo $beritaIsi['id']; ?>"><i class="fa-solid fa-eye"></i></a>
                <a href=" ?page=approval_news&id=<?php echo $beritaIsi['id'] ?>"><i class="fa-solid fa-square-check"></i></a>
                <a href="?page=berita_delete&role=<?php echo $currentRole; ?>&id=<?php echo $beritaIsi['id']; ?>"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
    <?php }
    } ?>
        </tbody>
    </table>
</section>
<?php
}
?>
    