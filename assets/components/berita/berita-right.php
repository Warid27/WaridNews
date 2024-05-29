<div class="berita-right">
    <div class="daftar-isi">
        <h3>Daftar Berita</h3>
        <table>
            <?php 
            // Reset the pointer of the result set
            mysqli_data_seek($beritaData, 0);
            $no = 1;
            ?>
            <?php while ($beritaIsi = mysqli_fetch_array($beritaData)) { ?>
            <tr>
                <td><?php echo $no++."."; ?></td>
                <td><a href="?page=berita_view&role=<?php echo $currentRole; ?>&id=<?php echo $beritaIsi['id']; ?>"><?php echo $beritaIsi['judul']; ?></a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="follow-us">
        <h3>Follow Us:</h3>
        <ul>
            <li><a target="_blank" href="https://wa.me/+6285892124267"><i class="fa-brands fa-square-whatsapp"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/sinatrya_al_warid/"><i class="fa-brands fa-square-instagram"></i></a></li>
            <li><a target="_blank" href="https://www.facebook.com/Sinatrya/"><i class="fa-brands fa-square-facebook"></i></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCKZ30dxJOrlvm5lJfAxoLEA"><i class="fa-brands fa-square-youtube"></i></a></li>
            <li><a target="_blank" href="https://github.com/Warid27"><i class="fa-brands fa-square-github"></i></a></li>
            <li><a target="_blank" href="https://id.linkedin.com/in/mohamad-sinatrya-al-warid-1aa8582a0"><i class="fa-brands fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>
