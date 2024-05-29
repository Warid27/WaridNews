<?php
// Capture the user ID from the URL
$user_id = $_GET['id'];

$userData = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$user_id'");
if (mysqli_num_rows($userData) > 0) {
    $data = mysqli_fetch_assoc($userData);
    $role = $data['role'];
?>
<div class="kotak_signin">
    <div class="wrapper">
        <div class="form-box signin">
            <h2>Edit Profile</h2>
            <form action="?page=profile_update" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="user_id" value="<?php echo $data['id']; ?>">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="nama" class="form_signin" required maxlength="30" value="<?php echo $data['nama']; ?>">
                    <label for="nama">Nama</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="username" class="form_signin" required maxlength="30" value="<?php echo $data['username']; ?>">
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" class="form_signin" required maxlength="30" value="<?php echo $data['password']; ?>">
                    <label for="password">Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-address-card"></i></span>
                    <select name="role" class="role" id="role" required>
                        <option value="" selected disabled>Pilih Role</option>
                        <option value="operator" <?php if ($role === 'operator') {
                            echo 'selected';
                        } ?>>Operator</option>
                        <option value="admin" <?php if ($role === 'admin') {
                            echo 'selected';
                        } ?>>Admin</option>
                    </select>
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
                            <?php if ($data['foto'] == 'default') { ?>
                                <i class="fa-solid fa-newspaper"></i>
                            <?php } else { ?>
                                <img src="<?php echo $userDir.$data['foto']; ?>">
                            <?php } ?>
                        </div>
                    </div>
                    <div id="fotoGanti" class="hidden">
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-file-image"></i></span>
                            <input type="file" name="foto" id="foto" class="uploadFoto"/>
                            <label for="foto">Upload Foto user</label>
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
        </div>
    </div>
</div>
<?php } ?>
