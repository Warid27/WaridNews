<section id="table-verified">
    <?php 
        $userData = mysqli_query($koneksi, "SELECT * FROM user");
        $no = 1;
    ?>
    <h2>Table User Admin Verified</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Alasan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
    <?php while ($userIsi = mysqli_fetch_array($userData)) { 
        if ($userIsi['verified'] === 'pending') {    
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $userIsi['nama']; ?></td>
            <td><?php echo $userIsi['username']; ?></td>
            <td>Pengajuan Admin</td>
            <td>
                <a href=" ?page=user_verified&id=<?php echo $userIsi['id'] ?>&verif=yes">verify</a>
                <a href=" ?page=user_verified&id=<?php echo $userIsi['id'] ?>&verif=no">not verify</a>
            </td>
        </tr>
    <?php }
    }
     ?>
        </tbody>
    </table>
</section>