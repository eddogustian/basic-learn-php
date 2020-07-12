<?php 
// koneksi database
include 'system/connection.php';
 
// menangkap data yang di kirim dari form
$usernmae = $_POST['username'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
$role = $_POST['role'];
 
// menginput data ke database
$sql = "INSERT INTO user VALUES ('$usernmae','$nama','$password',$role')";
$pdo->prepare($sql)->execute();

// mysqli_query("INSERT INTO user VALUES('$usernmae','$nama','$password',$role')");
 
// mengalihkan halaman kembali ke index.php
header('Location: '.base_url(). 'index.php?page=pengguna');
 
?>