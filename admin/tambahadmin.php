<?php
  session_start();
  if(isset($_SESSION['userid'])) {
  header('location:register.php'); }
  include('fragment/header.php');
  include('fragment/sidebar.php');

?> 
<!--- Content ------------------------------->
<html>
<head>
    <title>Pendaftaran Member</title>
</head> 
<body>
<table border="5" align="center" cellpadding="8" cellspacing="0">
<form action="prosesregister.php" method="post">
  <tr>
    <th colspan="2" align="center">Pendaftaran Admin</td>
  </tr>
  <tr>
    <td>Nama Lengkap </td>
    <td><input name="nama" type="text" size="40" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="email" type="text" size="40" /></td>
  </tr>
  <tr>
    <td>User ID </td>
    <td><input type="text" name="userid" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="Submit" type="submit" value="Daftar"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><font color="#0000FF">Admin yang sudah terdaftar ? <a href="#">Lihat</a></font></td>
  </tr>
</form>
</table>
</body>
</html>

<?php
include('fragment/footer.php');
?>