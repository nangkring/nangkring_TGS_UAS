<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    
    $username   = $_SESSION['username'];
    $id_topik   = $_GET['id_topik'];
    
?>
    <div id="dThread">
        <h1>Kenapa anda Melaporkan Postingan tersebut ?</h1><br><br><br>
        <form action="prosesLprThread.php" method="post">
            <input type="hidden" name="pelapor" value="<?php echo $username ?>">
            <input type="hidden" name="id_topik" value="<?php echo $id_topik ?>">
            <h2><input type="radio" name="lapor" value="Menganggu"  />&nbsp&nbsp Menganggu</h2><br>
            <h2><input type="radio" name="lapor" value="Tidak Sopan"  />&nbsp&nbsp Tidak Sopan</h2><br>
            <h2><input type="radio" name="lapor" value="Berbau Porno Grafi"  />&nbsp&nbsp Berbau Porno Grafi</h2><br><br>
            <p><input type="submit" value="Kirim"  /></p>
        </form>
    </div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>