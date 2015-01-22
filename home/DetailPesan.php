<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    
    //mengambil nilai dari nilai yang dikirim lewat pesan
    $id_pesan	= $_GET['id_pesan'];
    
    $query		= mysql_fetch_array(mysql_query("select * from tabel_pesan where id_pesan='$id_pesan'"));
    $id_pengirim	= $query['id_pengirim'];
    $isi_pesan		= $query['isi_pesan'];
    $tgl_pesan		= $query['tgl_pesan'];
    
    $query2		= mysql_fetch_array(mysql_query("select * from member where id='$id_pengirim'"));
    $pengirim		= $query2['username'];
?>
<div id="daftar-artikel">
    <h1>Pesan</h1><br>
    <div class="artikel">
	<img src="script/images/orang.png" alt="Gambar Artikel">
	<h1>Pengirim : <?php echo $pengirim ?></h1>
	<b><?php echo $tgl_pesan ?></b>
	<p><?php echo $isi_pesan ?></p>
    </div>
    <br>&nbsp&nbsp<a href="#" onclick="loadPage('buatPesan.php?username=<?php echo $pengirim ?>')"><input type="submit" value="Balas"></a>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>