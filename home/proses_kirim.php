<?php
    $id_penerima    = $_POST['id_penerima'];
    $id_pengirim    = $_POST['id_pengirim'];
    $isi            = $_POST['isi'];
    $tanggal	    = date("Y-m-d H:i:s");
    
    include ("config.php");
    
    if(empty($isi)){
        echo "<script>alert('Form Pesan Belum Di isi.'); location = 'home.php' </script>";
    }
    else{
        $sql = "INSERT INTO tabel_pesan (isi_pesan, id_pengirim, id_penerima, tgl_pesan) VALUES ('$isi', '$id_pengirim', '$id_penerima', '$tanggal')";
        $hasil = mysql_query($sql, $connect);
        if($hasil){
                header ("location:home.php");
        }
        else {
                echo "Pesan Gagal di kirim <br>";
        }	
    }
?>