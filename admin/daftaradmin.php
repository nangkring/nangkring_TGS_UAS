<?php
include('fragment/header.php');
include('fragment/sidebar.php');
include('connect.php');
?>
<html>
<head>
<title>Daftar Admin</title>
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
					<th colspan="5" align="center">List Admin Yang Sudah Terdaftar</td>
				</tr>
				
            <th>No.</th>
			<th>User ID</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
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

</body>
</html>
<?php
include('fragment/footer.php');
?>
