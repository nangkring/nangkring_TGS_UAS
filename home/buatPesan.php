<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    $username   = $_SESSION['username'];
    
    //Mengambil informasi user lewat link
    $user           = $_GET['username'];
    
    //penerima
    $query          = mysql_fetch_array(mysql_query("select * from member where username='$user'"));
    $id             = $query['id'];
    
    //pengirim
    $query2          = mysql_fetch_array(mysql_query("select * from member where username='$username'"));
    $id2            = $query2['id'];
?>
<div id="postingan">
    <h1>Pesan</h1><br>
    <form id="pesan" name="pesan" method="post" action="proses_kirim.php">
        <input type="hidden" name="id_penerima" value="<?php echo $id ?>"/>
        <input type="hidden" name="id_pengirim" value="<?php echo $id2 ?>"/>
        <textarea name="isi" placeholder="ketikkan pesan anda di sini"></textarea><br>
        <input type="submit" value="kirim">
    </form>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>
