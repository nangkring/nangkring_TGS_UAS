<?php
include('fragment/header.php');
include('fragment/sidebar.php');

session_start();
if ( !isset($_SESSION['userid']) ) {
    header('location:login.php'); 
}
else { 
    $usr = $_SESSION['userid']; 
}
require_once('connect.php');
$query = mysql_query("SELECT * FROM anggota WHERE userid = '$usr'");
$hasil = mysql_fetch_array($query);
?>	
<!--- Content ------------------------------->
<?php 
echo "<h2>Selamat Datang, $usr</h2>"; 
 ?>  
<html>
<body>
	<div id="main">
	<div class="header">
	<h2>Administrator Nangkring </h2>
	<h3>Pengaturan  Postingan</h3>

	</div>

	<div class="content">
	    <uL>
		<a href="lprnPostingan.php">
		    <li class="icon">
		        <img src="images/report.ico" alt="akun"/>
		        <br>Laporan Masalah Postingan
		    </li>
		</a>
		<a href="lihatPostingan.php">
		    <li class="icon">
		        <img src="images/add_to_folder.png" alt="akun"/>
		        <br>Lihat Postingan
		    </li>
		</a>
	    </uL>
	</div>

</body>
</html>
<?php
include('fragment/footer.php');
?>