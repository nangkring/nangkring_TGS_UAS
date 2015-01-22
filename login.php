<?php session_start(); 
    include "config.php"; 
    $username=$_POST['username']; 
    $password=$_POST['password']; 
    $query=mysql_query("select * from member where username='$username' and password='$password'"); 
    $cek=mysql_num_rows($query); 
    if($cek){ 
    $_SESSION['username']=$username;
?>Anda berhasil login. silahkan menuju <a href="home/home.php">Halaman HOME</a>
<?php 
    }else{ 
?>Anda gagal login. silahkan <a href="index.php">Login kembali</a>
<?php 
        echo mysql_error(); 
    } 
?> 