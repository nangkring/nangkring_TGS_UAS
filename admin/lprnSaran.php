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
                <h3>Saran</h3>
            </div>

	<div class="contentku">
            <table align ="center" border="1" cellpadding="4" cellspacing="0">
            <thead>
                <tr>
                <tr>
                    <th colspan="5" align="center">Saran Masuk</td>
                </tr>                           
                        <th>No.</th>
                        <th>Isi Saran</th>
                        <th>Pengirim</th>
                        <th>Tanggal</th>
			<th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php    
                    $query = mysql_query("SELECT * FROM tabel_saran"); 
                    $no = 1;
                    while ($hasil = mysql_fetch_array($query)) {
                        $id_pengirim   = $hasil['id_pengirim'];
                        $query2     = mysql_fetch_array(mysql_query("SELECT * FROM member where id='$id_pengirim'"));
			$pengirim   = $query2['username'];
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $hasil['isi_saran']; ?></td>
                        <td><?php echo $pengirim ?></td>
			<td><?php echo $hasil['tanggal'];?></td>
                        <td><a href="deleteSaran.php?id_saran=<?php echo $hasil['id_saran']?>">Hapus Saran</a></td>
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