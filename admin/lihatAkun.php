<?php
include('fragment/header.php');
include('fragment/sidebar.php');
include('connect.php');
?>
 
<html>
<head>
<title>Daftar Akun</title>
</head>
 
<body>
				<div class="header">
					<h2>Administrator Nangkring </h2>
					<h3>Lihat Akun</h3>
				</div>
 
<table align ="center" border="1" cellpadding="5" cellspacing="0">
    
	<thead>
        <tr>
				<tr>
					<th colspan="6" align="center">List Akun Yang Sudah Terdaftar</td>
				</tr>
				
	    <td>ID Member</td>
            <td>Nama Lengkap</td>
	    <td>Username</td>
            <td>Email</td>
            <td>Jenis Kelamin</td>
	    <td>Opsi</td>
        </tr>
    </thead>
    <tbody>
       <?php
	
    $query = mysql_query("SELECT * FROM member"); 
    while ($hasil = mysql_fetch_array($query)) {
    ?>
        <tr>
	    <td><?php echo $hasil['id']; ?></td>
            <td><?php echo $hasil['nama']; ?></td>
	    <td><?php echo $hasil['username']; ?></td>
            <td><?php echo $hasil['email']; ?></td>
            <td><?php echo $hasil['kelamin'];?></td>
	    <td><a href="deleteAkun.php?id=<?php echo $hasil['id']?>">Hapus Akun</a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>

</body>
</html>

<?php
include('fragment/footer.php');
?>