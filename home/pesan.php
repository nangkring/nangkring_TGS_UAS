<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    $username = $_SESSION['username'];
    
    $query          = mysql_fetch_array(mysql_query("select * from member where username='$username'"));
    $id             = $query['id'];
?>
<div id="dThread">
	<h1>Pesan</h1><br>
	<table>
		<tr>
			<th>Isi</th>
			<th>Pengirim</th>
			<th>Waktu di Terima</th>
		</tr>
		<?php
			$nomor	=1;
			$sql = "SELECT * FROM tabel_pesan where id_penerima=$id"; //ORDER by id_pesan DESC 
			$hasil=mysql_query($sql,$connect);
			while($record=mysql_fetch_array($hasil)){
				$id_pengirim=$record['id_pengirim'];
				$query2 = mysql_fetch_array(mysql_query("SELECT * FROM 	member where id='$id_pengirim'"));
				$pengirim = $query2['username'];
		?>
			<tr>
				<td><a href="#" onclick="loadPage('DetailPesan.php?id_pesan=<?php echo $record['id_pesan']; ?>')">Lihat Pesan</a></td>
				<td><?php echo $pengirim ?></td>
				<td><?php echo $record['tgl_pesan']?></td>
			</tr>
		<?php
			//Berhenti Looping 
			}
			mysql_close();
		?>
	</table>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>