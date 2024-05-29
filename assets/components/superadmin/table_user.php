<section id="table-user">
    <?php 
        $userData = mysqli_query($koneksi, "SELECT * FROM user");
        $no = 1;
        ?>
    <h2>Table User</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th>Verified</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
    <?php while ($userIsi = mysqli_fetch_array($userData)) {
        if ($userIsi['role'] != 'superadmin') {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $userIsi['nama']; ?></td>
            <td><?php echo $userIsi['username']; ?></td>
            <td><?php echo $userIsi['role']; ?></td>
            <td><?php echo $userIsi['verified']; ?></td>
            <td>
                <a href=" ?page=user_view&role=<?php echo $currentRole; ?>&username=<?php echo $userIsi['username'] ?>"><i class="fa-solid fa-eye"></i></a>
                <a href="?page=user_delete&id=<?php echo $userIsi['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
    <?php }
    }
    ?>
        </tbody>
    </table>
</section>