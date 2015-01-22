<?php
include('fragment/header.php');
include('fragment/sidebar.php');
include('connect.php');
?>
 
<html>
<head>
<title>Perubahan Data akun</title>
</head>
<body>

<form name="update_data" action="prosesupdate.php" method="post">
<input type="hidden" name="userid" value="<?php echo $user; ?>" />

				<div class="header">
					<h2>Administrator Nangkring </h2>
					<h3>Pengaturan  Admin</h3>
				</div>
								
 
<table align ="center" border="1" cellpadding="5" cellspacing="0">
    <thead>
				<tr>
					<th colspan="6" align="center">Daftar Admin</td>
				</tr>
        <tr>
            <td>No.</td>
			<td>User ID</td>
            <td>Nama Lengkap</td>
            <td>Email</td>
			<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
      <?php
	
    $cekuser = mysql_query("SELECT * FROM anggota"); 
    $no = 1;
    while ($hasil = mysql_fetch_array($cekuser)) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
			<td><?php echo $hasil['userid']; ?></td>
            <td><?php echo $hasil['nama']; ?></td>
            <td><?php echo $hasil['email']; ?></td>
	    <td><a href="edit.php?userid=<?php echo $hasil['userid']?>">Edit</a> || <a href="delete.php?userid=<?php echo $hasil['userid']?>">Hapus</a></td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>


<?php
include('fragment/footer.php');
?>
