<?php session_start();
    if(ISSET($_SESSION['username'])){
    include "config.php";
    $username=$_SESSION['username'];
    
?>
<!--Bagian Atas-->


<div id="dThread"> <!--Background putih-->
				<div id="cool">
					<div class="nebulan">
						<h1>About</h1>
					<marquee>
					<img src="image/img11.jpg" width="300" height="200"/>
					<img src="image/img10.jpg" width="300" height="200"/>
					<img src="image/img8.jpg"width="300" height="200"/>
					<img src="image/img9.jpg"width="300" height="200"/>
					</marquee>
						<h1>Developer Nangkring</h1>
						<div class="sky">
							<center><h2>Ketua</h2></center>
							<center><h3>Agusman Riyadi</h3></center>
						</div>
						<div class="sky2">
							<center><h2>Team</h2></center>
							<center><h3>Agus Andrianto</h3></center>
						</div>
						<div class="sky3">
							<center><h2>Team</h2></center>
							<center><h3>Ade Pratama</h3></center>
						</div>
						<div class="sky4">
							<center><h2>Team</h2></center>
							<center><h3>Wildan Aulia Zakki</h3></center>
						</div>
						<div class="skyblue">
							<h1>"Quote"</h1>
							<br><br>
							<center>
							<p>Orang-orang sukses menyadari bila ingin maju, mereka harus berubah.
							berubah disini berarti tumbuh, berkembang ke arah positif,baik dalam 
							hal ilmu, pemikiran, maupun pengalaman. mungkin saat kita gagal meraih
							sesuatu, kita merasa posisi kita sedang jatuh.kita tidak sadar bahwa saat
							kita gagal, saat itulah sebuah perubahan terjadi.untuk sukses dalam bidang
							kehidupan apapun, kita perlu bergerak. Namun tentu bukan asal bergerak. kita perlu
							bergerak maju, dan bukan mundur. maju dalam arti menata diri menjadi lebih baik.</p>
							</center>
						</div>
					</div>
				</div>
</div>

<!--Bagian bawah-->
<?php 
    }else{ 
?>
	Anda tidak boleh mengakses halaman ini. silahkan <a href="http://localhost/nangkring">Login dahulu</a>
<?php 
    } 
?>