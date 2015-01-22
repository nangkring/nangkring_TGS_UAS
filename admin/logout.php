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
 
 
	<div class="header">
			<h2>Apakah anda yakin ingin keluar ? </h2>
	</div>
			<body align="center">
			<div class="keluar">
			<uL>
						
							<a href="logout1.php"><img src="images/accept.png" alt="akun"/>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
							<a href="akun.php"><img src="images/delete.png" alt="akun"/>
							
											
			</uL>
					
			</body>
			</div>
  
 

<?php
include('fragment/footer.php');
?>