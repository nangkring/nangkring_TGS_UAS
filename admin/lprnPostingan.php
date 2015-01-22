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

	<div class="contentku">
            <table align ="center" border="1" cellpadding="4" cellspacing="0">
            <thead>
                <tr>
                <tr>
                    <th colspan="5" align="center">Laporan Masalah Postingan</td>
                </tr>                           
                        <th>No.</th>
                        <th>Topik</th>
                        <th>Isi Laporan</th>
                        <th>Pelapor</th>
                        <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php    
                    $query = mysql_query("SELECT * FROM laporkan_post"); 
                    $no = 1;
                    while ($hasil = mysql_fetch_array($query)) {
                        $id_topik   = $hasil['id_topik'];
                        $query2     = mysql_fetch_array(mysql_query("SELECT * FROM tabel_topik where id_topik='$id_topik'"));
			$topik      = $query2['topik'];
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <!--<td><?php echo $hasil['userid']; ?></td>-->
                        <td><?php echo $topik ?></td>
                        <td><?php echo $hasil['isi_laporan']; ?></td>
                        <td><?php echo $hasil['pelapor'];?></td>
                        <td><a href="detailPostingan.php?id_topik=<?php echo $hasil['id_topik']?>">Detail</a></td>
                    </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
            </table>
	</div>
    </body>
    </html>
<?php
include('fragment/footer.php');
?>