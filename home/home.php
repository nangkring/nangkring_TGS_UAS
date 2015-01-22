<!DOCTYPE HTML>
<HTML>
<head>
	<title>Nangkring - Home</title>
	<link rel="stylesheet" href="script/style.css"/>
	<script type="text/javascript" src="script/ajax.js"></script>
	<meta charset="UTF-8">
</head>
<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    $nama=$_SESSION['username'];
?>
<body>
	<div id="header">
		<img src="script/images/1111.png" alt="logo">
		<ul class="menu-utama">
			<!--<li><a href="#" onclick="loadPage('profile.html')">Profil</a></li>-->
			<a href="home.php"><li>NeTop</li></a>
			<a href="#" onclick="loadPage('post.php')"><li>BuatThread</li></a>
			<a href="#" onclick="loadPage('pesan.php')"><li>Pesan</li></a>
			<a href="#" onclick="loadPage('member.php')"><li>Member</li></a>
		</ul>
		<!--<div class="cari">
			<form method="post" action="searching.php" id="search">
				<input name="topik" type="text" size="40" placeholder="Search Topic ..." />
				<input type="submit" value="cari" />
			</form>
		</div>-->
	</div>
	<div id="wrapper">
		<div id="page">
		<div id="dThread">
			<h1>NeTop</h1><br>
			<table>
				<tr>
				    <th>No</th>
				    <th>Topic</th>
				    <th>Pengirim</th>
				    <th>Dilihat</th>
				    <th>Tanggal</th>
				</tr>
				<?php /*perulangan untuk nampilin database dari topik*/
					$nomor = 1;	
					$sql = "SELECT * FROM tabel_topik ORDER by tanggal DESC";
					$hasil=mysql_query($sql,$connect);
					while($record=mysql_fetch_array($hasil)){ 
				?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><a href="#" onclick="loadPage('thread.php?id_topik=<?php echo $record['id_topik']; ?>')"><?php echo $record['topik']; ?></a></td>
						<td><?php echo $record['pengirim']; ?></td>
						<td><?php echo $record['dilihat']; ?></td>
						<td><?php echo $record['tanggal']; ?></td>
					</tr>
				<?php
					//Berhenti Looping 
					}
					mysql_close();
				?>
			</table>
		</div>
		</div>
                        <div id="sidebar">
				<img src="script/images/orang.png" height="50px" width=50px"/>
				<ul>
					<li><a href="#" onclick="loadPage('profil.php?username=<?php echo $nama ?>')">Profil</a></li>
					<li><a href="#" onclick="loadPage('editProfil.php')">Edit Profil</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
				<br>
				<br>
				<h2>Wellcome To Nangkring.hol.es</h2><br>
				<p> Pengunjung Nangkring Semoga
				hari mu menyenangkan.</p>
			</div>
	</div><!-- End of wraper -->
	<div id="footer">
		<div id="altnav">
			<a href="https://www.facebook.com/OerangWuaras">Agusman Riyadi</a>
			<a href="https://www.facebook.com/agus.onehopeagdropper">Agus Andrianto</a>
			<a href="#">Wildan Aulia Zakki</a>
			<a href="#">Ade Pratama</a><br><br>
			<a href="#" onclick="loadPage('about.php')">Tentang</a> <!--Contoh Ngelink -->
			<a href="#" onclick="loadPage('saran.php')">Saran</a>
			<a href="#">Help</a>
			<a href="http://www.StrongDeathPeople.blogspot.com/">StrongDeathPeople</a>
		</div>
	</div>
	</body>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>
</HTML>