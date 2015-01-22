<?php
    include('config.php');
    
    $laporan    = $_POST['lapor'];
    $pelapor    = $_POST['pelapor'];
    $id_topik   = $_POST['id_topik'];
    
    //simpan data ke database
    $query = mysql_query("insert into laporkan_post values('', '$id_topik', '$laporan', '$pelapor')") or die(mysql_error());
     
    if ($query) {
        header ("location:home.php");
    }
?>