<?php
    session_start(); // Start session nya
    session_destroy(); // Hapus semua session
    include "connection.php";
    header("location: ".$base_url."index.php"); // Redirect ke halaman index.php
