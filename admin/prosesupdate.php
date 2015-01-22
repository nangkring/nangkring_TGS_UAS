<?php
include('connect.php');
 
//tangkap data dari form
$user = $_POST['userid'];
$nama = $_POST['nama'];
$mail = $_POST['email'];
$pass = $_POST['password'];
 
//update data di database sesuai user_id
 $cekuser = mysql_query("update anggota SET nama='$nama',email='$mail',password='$pass' where userid='$user'");
        if ($cekuser) {
            echo 'Update Admin Berhasil';
        } else {
            echo 'Proses Gagal!';
        }
?>
<h3> <a href="update.php"><img src="images/back.png" alt="akun"/></a></h3>