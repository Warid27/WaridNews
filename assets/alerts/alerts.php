<!-- Berita Hapus -->
<?php 
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'berita_hapus') {
?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Berita berhasil dihapus",
            });
        </script>
<?php  
    }
}
?>

<!-- Approval Success -->
<?php 
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'approval_success') {
?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Berita berhasil dipublish",
            });
        </script>
<?php  
    }
}
?>

<!-- Success Edit -->
<?php 
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'success_edit') {
?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Data Berhasil Diedit!",
            });
        </script>
<?php  
    }
}
?>

<!-- Verified -->
<?php 
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'verified') {
?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Verifikasi Admin Berhasil!",
            });
        </script>
<?php  
    }
}
?>

<!-- User Hapus -->
<?php 
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'user_hapus') {
?>
        <script>
            Swal.fire({
                icon: "success",
                title: "User Berhasil Dihapus!",
            });
        </script>
<?php  
    }
}
?>

<!-- Manipulate -->
<?php 
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'manipulate') {
?>
        <script>
            Swal.fire({
                icon: "error",
                title: "🗿🗿🗿",
                text: "Jangan Memanipulasi Data!"
            });
        </script>
<?php  
    }
}
?>

<!-- Not Sign -->
<?php 
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'notSign') {
?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Kamu Belum Sign In!"
            });
        </script>
<?php  
    }
}
?>

<!-- SIGN OUT -->
    <?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='signout') {
?>
    <script>
        Swal.fire({
            icon: "info",
            title: "You Already Sign Out",
        });
    </script>
<?php  
        }
    }
?>

    <!-- SIGN IN -->
<?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='failed_signin') {
?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Username dan Password tidak sesuai!",
        });
    </script>
<?php  
        }
    }
?>

<?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='success_signin') {
?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success Sign In!",
        });
    </script>
<?php  
        }
    }
?>

    <!-- SIGN UP -->
<?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='failed_signup_nama') {
?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Nama Sudah Terdaftar!",
        });
    </script>
<?php  
        }
    }
?>

<?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='failed_role') {
?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "role User Belum Diisi!",
        });
    </script>
<?php  
        }
    }
?>

<?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='success_signup') {
?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success Sign Up!",
        });
    </script>
<?php  
        }
    }
?>
    <!-- gagal_ukuran -->
    <?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='gagal_ukuran') {
?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Error!",
            text: "Ukuran File Terlalu Besar"
        });
    </script>
<?php  
        }
    }
?>
    <!-- gagal_ekstensi -->
<?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='gagal_ekstensi') {
?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Error!",
            text: "Ekstensi File Tidak Sesuai"
        });
    </script>
<?php  
        }
    }
?>


<!-- BERITA -->
<?php 
    if (isset($_GET['alert'])) {
        if ($_GET['alert']=='create_berita') {
?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Berita Sukses Dibuat!",
        });
    </script>
<?php  
        }
    }
?>