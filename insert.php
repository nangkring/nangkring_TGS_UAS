<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$jk = $_POST['jk'];
 
//simpan data ke database
$query = mysql_query("insert into member values('', '$nama', '$username', '$email', '$jk', '$password')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}
?>