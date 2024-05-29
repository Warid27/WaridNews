<section id="create-news">
    <h2>Create News</h2>
    <form action="?page=create_news" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="judul" class="form_signin" required maxlength="255">
            <label for="judul">Judul</label>
        </div>
        <div class="input-box-deskripsi">
            <span class="icon"><i class="fa-solid fa-newspaper"></i></span>
            <textarea type="text" name="deskripsi" id="deskripsi" class="form_signin" required maxlength="2500"></textarea>
            <label for="deskripsi">Deskripsi</label>
        </div>
        <div class="input-box">
            <span class="icon"><i class="fa-solid fa-file-image"></i></span>
            <input type="file" name="berita_foto" id="berita_foto" class="uploadFoto"/>
            <label for="berita_foto">Upload Foto Berita</label>
        </div>
        <input type="submit" class="tombol" value="CREATE">                    
    </form>
</section>