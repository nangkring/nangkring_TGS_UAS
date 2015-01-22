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
	<h3>Pengaturan  Akun</h3>

	</div>

	<div class="content">
	<!--<h1>selamat datang</h1>
	<p>
	    Selamat datang di candralab Studio, kami menyediakan layanan berikut :
	</p>-->
	    <uL>
		<!--<li class="icon">
		    <a href="#"><img src="images/report.ico" alt="akun"/>
		    <br>Laporan Masalah Akun</a>
		</li>
		<li class="icon">
		    <a href="#"><img src="images/send.png" alt="akun"/>
		    <br>Pesan Peringatan Akun</a>
		</li>-->
		<a href="lihatAkun.php">
		    <li class="icon">
		        <img src="images/akun.png" alt="akun"/>
		        <br>Lihat Akun
		    </li>
		</a>
	    </uL>
	</div>

</body>
</html>
<?php
include('fragment/footer.php');
?>
				