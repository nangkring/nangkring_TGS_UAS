<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
?>
<div id="dThread">
	<h1>Member</h1><br>
	<table>
		<tr>
			<th>NO</th>
			<!--<th>Id</th>-->
			<th>Nama Lengkap</th>
			<th>Username</th>
			<th>Jenis Kelamin</th>
		</tr>
		<?php
			$query = mysql_query("select * from member");
			$nomor = 1;
			while ($data = mysql_fetch_array($query)) {
				if($data['id']==27){
					continue;
				}
		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<!--<td><?php echo $data['id']; ?></td>-->
				<td><a href="#" onclick="loadPage('profil.php?username=<?php echo $data['username']; ?>')"><?php echo $data['nama']; ?></a></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['kelamin']; ?></td>
			</tr>
		<?php } ?>
	</table>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>