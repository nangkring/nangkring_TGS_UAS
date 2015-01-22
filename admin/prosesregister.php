<?php
require_once ('connect.php');
$nama = $_POST['nama'];
$mail = $_POST['email'];
$user = $_POST['userid'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM anggota WHERE userid = '$user'");
if ( mysql_num_rows($cekuser) <> 0 ) {
    echo 'User ID Sudah Terdaftar!<br/>'; 
    echo '<a href="admin.php">&laquo; Back</a>';
} else {
    if ( !$nama || !$mail || !$user || !$pass ) {
        echo 'Mohon maaf, data yang anda masukan tidak boleh kosong !<br/>';
        echo '<a href="tambahadmin.php">&laquo; Back</a>';
    } else {
        $simpan = mysql_query("INSERT INTO anggota VALUES('$nama','$mail','$user','$pass')");
        if ($simpan) {
            echo 'Pendaftaran Admin Berhasil, Kembali Ke Menu Admin <a href="admin.php">Admin</a>';
        } else {
            echo 'Proses Gagal!';
        }
    }
}
?>