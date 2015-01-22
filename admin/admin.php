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
    <div id="main">			
	<div class="header">
	    <h2>Administrator Nangkring </h2>
	    <h3>Pengaturan  Admin</h3>
	</div>

	<div class="content">
	    <uL>
		<a href="daftaradmin.php">
		    <li class="icon">
		        <img src="images/admin.png" alt="akun"/>
		        <br>Daftar Admin
		    </li>
		</a>
		<a href="tambahadmin.php">
		    <li class="icon">
		        <img src="images/add_page.png" alt="akun"/>
		        <br>Tambah Admin
		    </li>
		</a>
		<a href="update.php">
		    <li class="icon">
		        <img src="images/edit.png" alt="akun"/>
		        <br>Edit Admin
		    </li>
		</a>
	    </uL>

	</div>
<?php
include('fragment/footer.php');
?>