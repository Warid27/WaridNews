    <div class="kotak_signin">
        <div class="wrapper">
            <div class="form-box signin">
                <h2>Sign Up</h2>
                <form action="?page=signup_act" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="nama" class="form_signin" required maxlength="30">
                        <label for="nama">Nama</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="username" class="form_signin" required maxlength="30">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" class="form_signin" required maxlength="30">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-address-card"></i></span>
                        <select name="role" class="role" id="role" required>
                            <option value="" selected disabled>Pilih Role</option>
                            <option value="operator">Operator</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-file-image"></i></span>
                        <input type="file" name="foto" id="foto" class="uploadFoto"/>
                        <label for="foto">Upload Foto</label>
                    </div>

                    <input type="submit" class="tombol" value="SIGN UP">
                    
                    <div class="link">
                        <p>Already have an account? <a href="?page=signin">Sign In</a></p>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>