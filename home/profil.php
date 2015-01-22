<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    
    $username=$_SESSION['username'];
    
    //Mengambil informasi user lewat link
    $user           = $_GET['username'];
    $query          = mysql_fetch_array(mysql_query("select * from member where username='$user'"));
    $id             = $query['id'];
    $nama           = $query['nama'];
    $namauser 	    = $query['username'];
    $email          = $query['email'];
    $jenis_kelamin  = $query['kelamin'];
?>
<div id="postingan">
    <h1>Profil</h1><br>
    <img height="200px" width="200px" src="script/images/orang.png" alt="Gambar Artikel" />
    <table id="tabelKu">
        <tr>
            <td>ID</td>
            <td>&nbsp&nbsp&nbsp:</td>
            <td><?php echo $id ?></td>
        </tr>
        <tr>
            <td>Nama </td>
            <td>&nbsp&nbsp&nbsp:</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Username </td>
            <td>&nbsp&nbsp&nbsp:</td>
            <td><?php echo $namauser ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>&nbsp&nbsp&nbsp:</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>&nbsp&nbsp&nbsp:</td>
            <td><?php echo $jenis_kelamin ?></td>
        </tr>
    </table>
    <?php
        if($user!=$username){
    ?>
        <a href="#" onclick="loadPage('buatPesan.php?username=<?php echo $namauser ?>')">
        <p class="submit"><input type="submit" name="commit" value="Kirimi Pesan"></p></a>
    <?php
        }
    ?>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>