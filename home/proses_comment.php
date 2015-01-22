<?php
    $id_topik		= $_POST['id_topik'];
    $username	 	= $_POST['nama'];
    $topik	 	= $_POST['topik'];
    $isi	 	= $_POST['isi'];
    $tanggal		= date("Y-m-d H:i:s");
    $balasan            = $_POST['balasan']+1;
    
    include("config.php");
    
    
    if (empty($isi))
            {
                    header("location:create.php?status=Maaf, semua field harus di isi.");
            }
    else{
    
            $sql    = "INSERT INTO tabel_komentar (id_topik, topik, penjawab, isi, tanggal) VALUES ('$id_topik', '$topik', '$username', '$isi', '$tanggal')";
            $sql2   = "UPDATE tabel_topik SET total_balasan='$balasan' WHERE id_topik='$id_topik'";
            $hasil  = mysql_query($sql, $connect);
            $hasil2 = mysql_query($sql2,$connect);
            if($hasil && $hasil2){
                    header ("location:home.php");
            }
            else {
                    echo "Komentar gagal disimpan <br>";
            }	
    }
?>