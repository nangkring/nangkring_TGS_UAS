<?php
    $nama	= $_POST['nama'];
    $username   = $_POST['username'];
    $email	= $_POST['email'];
    $password   = $_POST['password'];
    include("config.php");

    if(empty($password)){
	//header("location:home.php?status=Maaf, password baru tidak boleh sama dengan password Anda saat ini.");
	$sql = "UPDATE member SET nama='$nama', email='$email' where username='$username'";
        $query = mysql_query($sql, $connect);
        if($sql){
                echo "<script>alert('Selamat. . . !! Update berhasil.'); location = 'home.php' </script>";
	    }
            else {
                echo "Password gagal disimpan <br>";
            }
    }
    else {
        $sql = "UPDATE member SET nama='$nama', email='$email', password='$password' where username='$username'";
        $query = mysql_query($sql, $connect);
        if($sql){
                echo "<script>alert('Selamat. . . !! Update berhasil.'); location = 'home.php' </script>";
            }
            else {
                echo "Password gagal disimpan <br>";
            }
    }
 ?>