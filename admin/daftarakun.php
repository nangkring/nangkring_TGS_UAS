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
					<h3>Pengaturan  Admin</h3>
				</div>
 
<table align ="center" border="1" cellpadding="5" cellspacing="0">
    
	<thead>
        <tr>
				<tr>
					<th colspan="5" align="center">List Akun Yang Sudah Terdaftar</td>
				</tr>
				
            <td>No.</td>
			<td>Nama</td>
            <td>Username</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
       <?php
	
    $query = mysql_query("SELECT * FROM anggota"); 
    $no = 1;
    while ($hasil = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
			<td><?php echo $hasil['userid']; ?></td>
            <td><?php echo $hasil['nama']; ?></td>
            <td><?php echo $hasil['email']; ?></td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
<h3 align="center" > <a href="admin.php"><img src="images/back.png" alt="akun"/></a></h3>

</body>
</html>

<?php
include('fragment/footer.php');
?>
