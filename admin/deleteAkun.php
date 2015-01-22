<?php
include 'connect.php';

$id = $_GET['id'];
 
$cekuser = mysql_query("delete from member where id='$id'") or die(mysql_error());
header("location:delete2.php")
?>