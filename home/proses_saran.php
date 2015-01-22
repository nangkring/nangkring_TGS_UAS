<?php
    $isi            = $_POST['isi_saran'];
    $id_pengirim    = $_POST['id_pengirim'];
    $tanggal	    = date("Y-m-d H:i:s");
    
    include ("config.php");
    
    if(empty($isi)){
        echo "<script>alert('Form Saran Belum Di isi.'); location = 'home.php' </script>";
    }
    else{
        $sql = "INSERT INTO tabel_saran (isi_saran, id_pengirim, tanggal) VALUES ('$isi', '$id_pengirim', '$tanggal')";
        $hasil = mysql_query($sql, $connect);
        if($hasil){
                header ("location:home.php");
        }
        else {
                echo "Saran Gagal di kirim <br>";
        }	
    }
?>