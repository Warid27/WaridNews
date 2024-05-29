<?php 

    // Menghapus semua session
    session_destroy();

    // Mengalihkan halaman ke halaman signup
    header("location:?page=signin&role=notSign&alert=signout");

?>