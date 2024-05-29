<section id="edit-news">
    <h2>Edit News</h2>
    <?php 
        if (isset($_GET['id_berita'])) {
            $id_berita = $_GET['id_berita'];
            $dataBerita = mysqli_query($koneksi, "SELECT * FROM isi_berita WHERE id='$id_berita'");

            if (mysqli_num_rows($dataBerita) > 0) {
                $data = mysqli_fetch_assoc($dataBerita);
?>
    <form action="?page=berita_edit" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="id_berita" value="<?php echo $data['id']; ?>">
        <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="judul" class="form_signin" required maxlength="255" value="<?php echo $data['judul'] ?>">
            <label for="judul">Judul</label>
        </div>
        <div class="input-box-deskripsi">
            <span class="icon"><i class="fa-solid fa-newspaper"></i></span>
            <textarea type="text" name="deskripsi" id="deskripsi" class="form_signin" required maxlength="2500"><?php echo $data['deskripsi'] ?></textarea>
            <label for="deskripsi">Deskripsi</label>
        </div>
        <div class="update-foto-container">
            <label class="label">User Foto</label>
            <label class="label-opt">
                <input type="radio" id="fotoLamaCheck" name="userFotoSelect" onclick="fotoLama();" value="fotoLama" required/>
                <span>Foto Asli</span>
            </label>
            <label class="label-opt">
                <input type="radio" id="fotoGantiCheck" name="userFotoSelect" onclick="fotoGanti();" value="fotoGanti" required/>
                <span>Ganti Foto</span>
            </label>
            <label class="label-opt">
                <input type="radio" id="fotoDefaultCheck" name="userFotoSelect" onclick="fotoDefault();" value="fotoDefault" required/>
                <span>Foto Default</span>
            </label>
            <div id="fotoLama" class="hidden">
                <div class="foto-dashboard-edit">
                  <?php if ($data['berita_foto'] == 'default') { ?>
                    <i class="fa-solid fa-newspaper"></i>
                  <?php } else { ?>
                    <img src="<?php echo $beritaDir.$data['berita_foto']; ?>">
                    <?php } ?>
            </div>
            </div>
            <div id="fotoGanti" class="hidden">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-file-image"></i></span>
                    <input type="file" name="berita_foto" id="berita_foto" class="uploadFoto"/>
                    <label for="berita_foto">Upload Foto Berita</label>
                </div>
            </div>
            <div id="fotoDefault" class="hidden">
                <div class="foto-dashboard-edit">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
            </div>
        </div>
        <input type="submit" class="tombol" value="UPDATE">                    
    </form>
<?php 
        }    
    }
    ?>
</section>