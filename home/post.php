<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "koneksi.php";
    $nama=$_SESSION['username'];
?>
<div id="postingan">
    <h1>Buat Thread</h1><br>
    <form id="form1" name="form1" method="post" action="proses_post.php">
        <input type="txt" name="judul" placeholder="judul" /><br>
        <textarea name="isi" placeholder="isikan thread anda di sini"></textarea><br>
        <input type="hidden" name="nama" value=<?php echo $nama ?> /><br>
        <input type="submit" value="kirim">
        <input type="reset" value="Hapus" /></td>
    </form>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>