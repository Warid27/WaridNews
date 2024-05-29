<div class="kotak_signin">
    <div class="wrapper">
        <div class="form-box">
            <h2>Sign In</h2>
            <form action="?page=signin_act" method="post">
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
                <input type="submit" class="tombol" value="SIGN IN">
                <div class="link">
                    <p>Don't have an account? <a href="?page=signup">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
