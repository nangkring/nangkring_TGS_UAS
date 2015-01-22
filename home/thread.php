<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    
    $username=$_SESSION['username'];
    
    //untuk memilih baris menurut id_topik yang didapat dari home    
    $id_topik = $_GET['id_topik'];
    
    $query6=mysql_fetch_array(mysql_query("select dilihat from tabel_topik where id_topik='$id_topik'"));
    $dilihat = $query6 ['dilihat'] + 1;
    $balasan = $query6 ['total_balasan'];
    $sql2 = "UPDATE tabel_topik SET dilihat='$dilihat' WHERE id_topik='$id_topik'";
    $hasil2 = mysql_query($sql2, $connect);
    
    //memunculkan thread
    $query5=mysql_fetch_array(mysql_query("select * from tabel_topik where id_topik='$id_topik'"));
    //mengambil topik atau judul
    $topik = $query5['topik'];
    
    //memunculkan komentar
    $query7="SELECT * FROM tabel_komentar WHERE id_topik='$id_topik' ORDER BY tanggal DESC";
    $result2=mysql_query($query7);
?>
<div id="daftar-artikel">
    <h1>Thread</h1><br>
    <div class="artikel">
	<img src="script/images/orang.png" alt="Gambar Artikel">
	<h1><?php echo $query5['topik']; ?></h1>
	<b><?php echo $query5['tanggal']; ?></b><b> Views : <?php echo $dilihat ?></b><b><?php echo $query5['pengirim']; ?></b>
	<p><?php echo $query5['isi']; ?></p>
	<p class="submit"><a href="#" onclick="loadPage('lprThread.php?id_topik=<?php echo $id_topik ?>')"')">
	    <input type="submit" name="commit" value="Laporkan Thread Ini"></a>
	</p>
    </div>
    <form id="formComment" name="formComment" method="post" action="proses_comment.php">
	<div class=artikel>
	    <input type="hidden" name="id_topik" value=<?php echo $id_topik ?> /><br>
	    <input type="hidden" name="nama" value=<?php echo $username ?> /><br>
	    <input type="hidden" name="topik" value=<?php echo $topik ?> /><br>
	    <input type="hidden" name="balasan" value=<?php echo $balasan ?> /><br>
	    <textarea placeholder="komentari postingan" name="isi"></textarea>
	    <p class="submit"><input type="submit" name="commit" value="Kirim"></p>
	</div>
    </form>
    <?php
	while($rows=mysql_fetch_array($result2)){
    ?>
	<div class="artikel">
	    <img src="script/images/orang.png" alt="Gambar Artikel">
	    <h1>Comment</h1>
	    <b><?php echo $rows['tanggal']; ?></b><b><?php echo $rows['penjawab']; ?></b>
	    <p><?php echo $rows['isi']; ?></p>
	</div>
    <?php
	}
    ?>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>
