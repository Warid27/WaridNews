<?php 
    // Fetch data from isi_berita table ordered by id in descending order
    $beritaData = mysqli_query($koneksi, "SELECT * FROM isi_berita WHERE approval = 'APPROVE' ORDER BY id DESC");
    $no = 1;
?>
<div class="berita-container">
    <?php include "./assets/components/berita/berita-left.php"; ?>
    <!-- Berita Kiri -->
    <?php include "./assets/components/berita/berita-center.php"; ?>
    <?php include "./assets/components/berita/berita-right.php"; ?>
</div>        
<hr>
<?php include "./assets/components/berita/berita-bottom.php"; ?>
