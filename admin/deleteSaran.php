<?php
include 'connect.php';

$id_saran = $_GET['id_saran'];
 
$cekuser = mysql_query("delete from tabel_saran where id_saran='$id_saran'") or die(mysql_error());
header("location:delete3.php")
?>