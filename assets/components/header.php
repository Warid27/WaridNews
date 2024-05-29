<header>
    <div class="logo">
        <h1 class="logo-text"><span>Warid</span>News</h1>
    </div>
    <i class="fa-solid fa-bars menu-toggle"></i>
    <div class="navLinks">
        <a href="?page=home&role=<?php echo $currentRole; ?>" class="superadmin">Home</a>
        <a href="?page=news&role=<?php echo $currentRole; ?>" class="superadmin">News</a>
        <?php if ($user_is_signin) { ?>
        <a href="?page=dashboard&role=<?php echo $currentRole; ?>&subPage=home" class="userIn">Dashboard</a>
        <?php } ?>
    </div>
    <div class="userProfile">
        <i class="fa-solid <?php echo isset($_SESSION['darkMode']) && $_SESSION['darkMode'] ? 'fa-moon' : 'fa-sun'; ?>" id="toggleDark"></i>    
        <?php if ($user_is_signin) { ?>
        <h3 class="userIn">
            <span class="userIn"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <span class="userIn"><?php echo htmlspecialchars($_SESSION['role']); ?></span>
        </h3>
        <?php } ?>
        <div class="imgBx">
            <?php include "./assets/components/profile/profileFoto.php" ?>
            <div class="notSign superadmin"><i class="fa-solid fa-user"></i></div>
        </div>
        <div class="dropdownProfile">
            <?php if ($user_is_signin) { ?>
            <div class="userIn dropdownDiv">
                <a href="?page=profile&role=<?php echo $currentRole; ?>"><i class="fa-solid fa-user-pen"></i> <span>Profile</span></a>
                <a href="?page=signout&role=<?php echo $currentRole; ?>" class="sign-out"><i class="fa-solid fa-right-from-bracket"></i> <span>Sign Out</span></a>
            </div>
            <?php } ?>    
            <div class="notSign dropdownDiv superadmin">
                <a href="?page=signin&role=<?php echo $currentRole; ?>"><i class="fa-solid fa-right-to-bracket"></i> <span>Sign In</span></a>
                <a href="?page=signup&role=<?php echo $currentRole; ?>" class="sign-out"><i class="fa-solid fa-user-plus"></i> <span>Sign Up</span></a>
            </div>    
        </div>
    </div>
</header>