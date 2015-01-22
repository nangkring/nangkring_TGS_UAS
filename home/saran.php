<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    $username   = $_SESSION['username'];
    
    //mencari id_pengirim
    $query          = mysql_fetch_array(mysql_query("select * from member where username='$username'"));
    $id             = $query['id'];
?>
<div id="postingan">
    <h1>Kirim Saran</h1><br>
    <form id="saran" name="saran" method="post" action="proses_saran.php">
        <input type="hidden" name="id_pengirim" value="<?php echo $id ?>"/>
        <textarea name="isi_saran" placeholder="ketikkan saran anda  kepada kami di sini"></textarea><br>
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