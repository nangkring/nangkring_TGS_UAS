<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    
    $username 	= $_SESSION['username'];
    
    //mencari data dengan username login
    $query=mysql_fetch_array(mysql_query("select * from member where username='$username'"));
    
?>
    <div id="postingan">
        <h1>Edit Profil</h1>
        <form id="form1" name="form1" method="post" action="updateProfil.php">
	    <input type="hidden" name="username" required="required" value="<?php echo $query['username']; ?>"/>
            <table id="tabelKu">
		<tr>
		    <td>Nama </td>
		    <td>&nbsp&nbsp&nbsp:</td>
		    <td><input type="text" name="nama" required="required" value="<?php echo $query['nama']; ?>"/></td>
		</tr>
		<tr>
		    <td>Email </td>
		    <td>&nbsp&nbsp&nbsp:</td>
		    <td><input type="text" name="email" required="required" value="<?php echo $query['email']; ?>"/></td>
		</tr>
                <tr>
                    <td>Password Lama</td>
                    <td>&nbsp&nbsp&nbsp:</td>
                    <td><input type="text" name="pass_lama" disabled="disabled" value="<?php echo $query['password']; ?>" /><br></td>
                </tr>
                <tr>
                    <td>Password Baru</td>
                    <td>&nbsp&nbsp&nbsp:</td>
                    <td><input type="password" name="password" placeholder="Masukkan Password Baru" /><br></td>
                </tr>
            </table>
            <input type="submit" value="Update">
        </form>
    </div>
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>