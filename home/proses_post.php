<?php
    $pengirim		= $_POST['nama'];
    $topik		= $_POST['judul'];
    $isi	 	= $_POST['isi'];
    $tanggal		= date("Y-m-d H:i:s");
    
    include("config.php");
    
    
    if (empty($isi) || empty($topik))
            {
                    header("location:create.php?status=Maaf, semua field harus di isi.");
            }
    else{
    
            $sql = "INSERT INTO tabel_topik (pengirim, topik, isi, tanggal) VALUES ('$pengirim', '$topik', '$isi', '$tanggal')";
            $hasil = mysql_query($sql, $connect);
            if($hasil){
                    header ("location:home.php");
            }
            else {
                    echo "Thread gagal disimpan <br>";
            }	
    }
?>