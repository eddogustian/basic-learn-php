<?php
    $host = 'localhost'; // Nama hostnya
    $username = 'root'; // Username
    $password = 'root'; // Password (Isi jika menggunakan password)
    $database = 'db_basic_learnphp'; // Nama databasenya
    $base_url = 'http://localhost/basic-learn-php/'; // Set Base Url Web
    // Koneksi ke MySQL dengan PDO
    $pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>