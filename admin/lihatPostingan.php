<?php
include('fragment/header.php');
include('fragment/sidebar.php');
include('connect.php');
session_start();
    if ( !isset($_SESSION['userid']) ) {
        header('location:login.php'); 
    }
    else { 
        $usr = $_SESSION['userid']; 
    }
?>
 
<html>
<head>
<title>Daftar Akun</title>
</head>
 
<body>
				<div class="header">
					<h2>Administrator Nangkring </h2>
					<h3>Lihat Postingan</h3>
				</div>
 
<table align ="center" border="1" cellpadding="6" cellspacing="0">
    
	<thead>
        <tr>
				<tr>
					<th colspan="6" align="center">List Postingan</td>
				</tr>
				
            <td>Pengirim</td>
	    <td>Topik</td>
            <td>Dilihat</td>
            <td>Balasan</td>
	    <td>Tanggal</td>
	    <td>Opsi</td>
        </tr>
    </thead>
    <tbody>
       <?php
	
    $query = mysql_query("SELECT * FROM tabel_topik"); 
    while ($hasil = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $hasil['pengirim']; ?></td>
	    <td><?php echo $hasil['topik']; ?></td>
            <td><?php echo $hasil['dilihat']; ?></td>
            <td><?php echo $hasil['total_balasan'];?></td>
	    <td><?php echo $hasil['tanggal'];?></td>
	    <td><a href="detailPostingan.php?id_topik=<?php echo $hasil['id_topik']?>">Detail</a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<h3 align="center" > <a href="admin.php"><img src="images/back.png" alt="akun"/></a></h3>

</body>
</html>

<?php
include('fragment/footer.php');
?>