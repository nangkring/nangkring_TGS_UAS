<?php
session_start();
require_once ('connect.php');
$user = $_POST['userid'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM anggota WHERE userid = '$user'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if (!$user || !$pass ) {
        echo 'Mohon maaf, data yang anda masukan tidak boleh kosong !<br/>';
        echo '<a href="tambahadmin.php">&laquo; Back</a>';
}
else
if ( $jumlah == 0 ) {
    echo 'User ID Belum Terdaftar!<br/>';
    echo '<a href="index.php">&laquo; Back</a>';
} else {
    if ( $pass <> $hasil['password'] ) {
        echo 'Password Salah!<br/>';
        echo '<a href="index.php">&laquo; Back</a>';
    } else {
        $_SESSION['userid'] = $user;
        header('location:akun.php');
    }
}
?>