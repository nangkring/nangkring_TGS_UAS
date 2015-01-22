<?php
    include 'connect.php';
    $isi        = $_POST['isi'];
    $pengirim   = $_POST['pengirim'];
    $id_topik   = $_POST['id_topik'];
    $tanggal	= date("Y-m-d H:i:s");
    
    //mengambil id_penerima
    $query          = mysql_fetch_array(mysql_query("select * from member where username='$pengirim'"));
    $id_penerima    = $query['id'];
    
    $cekuser    = mysql_query("delete from tabel_topik where id_topik='$id_topik'") or die(mysql_error());
    $cekuser2   = mysql_query("delete from laporkan_post where id_topik='$id_topik'") or die(mysql_error());
    $cekuser3   = mysql_query("delete from tabel_komentar where id_topik='$id_topik'") or die(mysql_error());
    $sql        = "INSERT INTO tabel_pesan (isi_pesan, id_pengirim, id_penerima, tgl_pesan) VALUES ('$isi', '27', '$id_penerima', '$tanggal')";
    $hasil      = mysql_query($sql, $konek);
    header("location:delete1.php")
?>