<?php
include 'connect.php';

$user = $_GET['userid'];
 
$cekuser = mysql_query("delete from anggota where userid='$user'") or die(mysql_error());
header("location:delete1.php")
?>