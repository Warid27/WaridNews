<?php

$role = $_SESSION['role'] ?? 'notSign';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($koneksi, $id);

    // Retrieve data from the table with a LEFT JOIN to the user table
    $query = "
        SELECT isi_berita.*, user.username 
        FROM isi_berita 
        LEFT JOIN user ON isi_berita.pembuat = user.username 
        WHERE isi_berita.id = '$id'
    ";
    $dataBerita = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($dataBerita) > 0) {
        $data = mysqli_fetch_assoc($dataBerita);

        // Check if the username from the user table is null
        if (is_null($data['username'])) {
            $pembuat = 'deleted-user';
        } else {
            $pembuat = $data['pembuat'];
        }
?>
<div class="berita-view-container">
    <div class="berita-view">
        <a href="?page=user_view&role=<?php echo $currentRole; ?>&username=<?php echo $pembuat; ?>" class="berita-view-pembuat"><i class="fa-solid fa-user"></i> <?php echo $pembuat; ?></a>
        <h3 class="berita-view-tanggal"><i class="fa-solid fa-calendar-days"></i> <?php echo $data['tanggal_input']; ?></h3>
        <h1 class="berita-view-judul"><?php echo $data['judul']; ?></h1>
        <div class="berita-view-foto">
            <?php if ($data['berita_foto'] == 'default') { ?>
                <i class="fa-solid fa-newspaper"></i>
            <?php } else { ?>
                <img src="<?php echo $beritaDir.$data['berita_foto']; ?>">
            <?php } ?>
        </div>
        <div class="berita-view-deskripsi"><?php echo $data['deskripsi']; ?></div>
    
        <?php if ($role === 'admin' || $role === 'superadmin') : ?>
        <div class="berita-view-aksi">
            <?php
                if ($data['approval'] != 'APPROVE') {
            ?>
                <a href=" ?page=approval_news&id=<?php echo $data['id'] ?>"><i class="fa-solid fa-square-check"></i></a>
            <?php
                }
            ?>
            <?php 
                if ($role === 'admin') {
            ?>
            <a href="?page=dashboard&role=<?php echo $role; ?>&subPage=edit&id_berita=<?php echo $data['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
            <?php 
                }
             ?>
            <a href="?page=berita_delete&role=<?php echo $currentRole; ?>&id=<?php echo $data['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
        </div>
        <?php endif ?>
    </div>
</div>
<?php }
}
?>
