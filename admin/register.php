<?php
include('fragment/header.php');
include('fragment/sidebar.php');
?>

<html>
<head>
    <title>Pendaftaran Member</title>
</head> 
<body>
				<div class="header">
					<h2>Administrator Nangkring </h2>
					<h3>Pengaturan  Admin</h3>
				</div>
<table align ="center" border="1" cellpadding="8" cellspacing="0">
<form action="prosesregister.php" method="post">
  <tr>
    <th colspan="2" align="center">Pendaftaran Admin</td>
  </tr>
  <tr>
    <td>User ID </td>
    <td><input type="text" name="userid" size="30" /></td>
  </tr>
  <tr>
    <td>Nama Lengkap </td>
    <td><input name="nama" type="text" size="30" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="email" type="email" size="30" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="30" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="Submit" type="submit" value="Daftar"/></td>
  </tr>
  <!--<tr>
    <td colspan="2" align="center"><font color="#0000FF">Sudah Jadi Admin? <a href="daftaradmin.php">Lihat</a></font></td>
  </tr>-->
</form>
</table>

</body>

</html>

<?php
include('fragment/footer.php');
?>