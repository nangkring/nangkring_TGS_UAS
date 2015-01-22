<?php
include('fragment/header.php');
include('fragment/sidebar.php');
?>


<?php
include 'connect.php';
$user = $_GET['userid'];
$cekuser = mysql_query("select * from anggota where userid='$user'");
$hasil = mysql_fetch_array($cekuser);
?>

<html>
<head>
    <title>Perubahan Data Akun</title>
</head> 
<body>
				<div class="header">
					<h2>Administrator Nangkring </h2>
					<h3>Pengaturan  Admin</h3>
				</div>
<table align ="center" border="1" cellpadding="8" cellspacing="0">
<form action="prosesupdate.php" method="post">
<input type="hidden" name="userid" value="<?php echo $user; ?>" />
  <tr>
    <th colspan="2" align="center">Perubahan Data Akun</td>
  </tr>
  
   
   <tr>
    <td>User ID </td>
    <td><input type="text" name="userid" size="30" required="required" value="<?php echo $hasil['userid']; ?>" disabled  /></td>
  </tr>
  <tr>
    <td>Nama Lengkap </td>
    <td><input name="nama" type="text" size="30" required="required" value="<?php echo $hasil['nama']; ?>"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="email" type="email" size="30" required="required" value="<?php echo $hasil['email']; ?>"  /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="30" required="required" value="<?php echo $hasil['password']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="Submit" type="submit" value="Simpan"/></td>
  </tr>
</form>
</table>
<h3 align="center" > <a href="update.php"><img src="images/back.png" alt="akun"/></a></h3>

</body>
</html>
<?php
include('fragment/footer.php');
?>