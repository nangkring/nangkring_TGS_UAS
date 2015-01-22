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
    
    $topik      = $hasil['topik'];
    $pengirim   = $hasil['pengirim'];
?>
    <?php 
        echo "<h2>Selamat Datang, $usr</h2>"; 
    ?>
    <div id="main">
        <div class="header">
            <h2>Administrator Nangkring </h2>
            <h3>Detail Postingan</h3>
            <h5>Dengan MengKlik Kirim Thread tersebut akan di Hapus !!!</h5>
        </div>
        
        <table align ="center" border="1" cellpadding="8" cellspacing="0">
            <form action="proseshapusthread.php" method="post">
                <input type="hidden" name="pengirim" value="<?php echo $pengirim ?>"/>
                <input type="hidden" name="id_topik" value="<?php echo $id_topik ?>"/>
                <tr>
                    <th colspan="2" align="center">Kirim Pesan Peringatan dan Hapus Thread</td>
                </tr>
                <tr>
                      <td colspan="2" align="center">
                        <textarea name="isi" placeholder="ketikkan pesan anda di sini">Maaf Thread Anda dengan topik "<?php echo $topik ?>", Kami Hapus Karena Mungkin Mengganggu atau tidak sopan atau berbau pornografi.</textarea><br></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input name="Submit" type="submit" value="Kirim"/></td>
                </tr>
            </form>
        </table>
<?php
include('fragment/footer.php');
?>