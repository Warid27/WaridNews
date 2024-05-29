<section id="table-berita">
    <?php 
        $beritaData = mysqli_query($koneksi, "SELECT * FROM isi_berita");
        $no = 1;
    ?>
    <h2>Table Berita</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pembuat</th>
                <th>Tanggal Input</th>
                <th>Judul</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
    <?php while ($beritaIsi = mysqli_fetch_array($beritaData)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $beritaIsi['pembuat']; ?></td>
            <td><?php echo $beritaIsi['tanggal_input']; ?></td>
            <td><?php echo $beritaIsi['judul']; ?></td>
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
                <a href=" ?page=berita_view&id=<?php echo $beritaIsi['id'] ?>"><i class="fa-solid fa-eye"></i></a>
                <a href="?page=berita_delete&id=<?php echo $beritaIsi['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
    <?php } ?>
        </tbody>
    </table>
</section>