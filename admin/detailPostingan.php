<?php
    include('fragment/header.php');
    include('fragment/sidebar.php');

    session_start();
    if ( !isset($_SESSION['userid']) ) {
        header('location:login.php'); 
    }
    else { 
        $usr    = $_SESSION['userid']; 
    }
    require_once('connect.php');
    $id_topik   = $_GET['id_topik'];
    
    $query      = mysql_query("SELECT * FROM tabel_topik WHERE id_topik = '$id_topik'");
    $hasil      = mysql_fetch_array($query);
    
    $pengirim           = $hasil['pengirim'];
    $topik              = $hasil['topik'];
    $isi                = $hasil['isi'];
    $dilihat            = $hasil['dilihat'];
    $total_balasan      = $hasil['total_balasan'];
    $tanggal            = $hasil['tanggal'];
?>
    <?php 
        echo "<h2>Selamat Datang, $usr</h2>"; 
    ?>
    <html>
    <body>
	<div id="main">
            <div class="header">
                <h2>Administrator Nangkring </h2>
                <h3>Detail Postingan</h3>
            </div>
            <div class="link">
                <a href="HapusPos.php?id_topik=<?php echo $hasil['id_topik']?>">Hapus Postingan Berikut !!!</a>
            </div>
            <div class="content">
                <table border="1">
                    <tr><td width="750"><h4>Pengirim :</h4><h5><?php echo $pengirim ?></h5></td></tr>
                    <tr><td><h4>topik :</h4><h5><?php echo $topik ?></h5></td></tr>
                    <tr><td><h4>Isi :</h4><h5><br><?php echo $isi ?></h5></td></tr>
                    <tr><td><h4>Dilihat :</h4><h5><?php echo $dilihat ?> Kali</h5></td></tr>
                    <tr><td><h4>Total balasan :</h4><h5><?php echo $total_balasan ?></h5></td></tr>
                    <tr><td><h4>Tanggal :</h4><h5><?php echo $tanggal ?></h5></td></tr>
                </table>
            </div>
    </body>
    </html>
<?php
include('fragment/footer.php');
?>