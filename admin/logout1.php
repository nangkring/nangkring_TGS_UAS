<?php
session_start();
require_once ('connect.php');
unset( $_SESSION['userid'] );
?>
<h2>Anda telah berhasil logout..</h2>
Silahkan klik <a href="index.php"><b>disini</b></a> untuk login kembali