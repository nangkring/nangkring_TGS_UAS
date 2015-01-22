<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    $topik= $_GET['cari']; //get the nama value from form
    $q = "SELECT * from tabel_topik where topik like '%$topik%' "; //query to get the search result
    $result = mysql_query($q,$connect); //execute the query $q
?>
<div id="dThread">
    <h1>Hasil Pencarian</h1><br>
    <table>
        <tr>
	    <th>No</th>
	    <th>Topic</th>
	    <th>Pengirim</th>
	    <th>Dilihat</th>
	    <th>Tanggal</th>
	</tr>
	<?php /*perulangan untuk nampilin database dari topik*/
            $nomor = 1;	
	    while($record=mysql_fetch_array($result)){ 
	?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><a href="#" onclick="loadPage('thread.php?id_topik=<?php echo $record['id_topik']; ?>')"><?php echo $record['topik']; ?></a></td>
                <td><?php echo $record['pengirim']; ?></td>
                <td><?php echo $record['dilihat']; ?></td>
                <td><?php echo $record['tanggal']; ?></td>
            </tr>
	<?php
	    //Berhenti Looping 
	    }
            mysql_close();
	?>
    </table>
</div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>