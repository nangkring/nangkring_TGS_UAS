<!doctype HTML>
<html>
	<head><title>Nangkring-Login</title>
		<style type="text/css" media="all">@import "index/style/styleLogin.css";</style>
		<style type="text/css" media="all">@import "index/style/styleLogin.css";</style>
		<script>
			/*Fungsi Untuk Validasi data*/
			function cekData()
				{
				    // Cek isi kotak teks nama
				    if (formTes.nama.value == "")
				    {
					alert("Nama harus diisi");
					formTes.nama.focus();
					return false;
				    }
				    // Cek isi kotak teks alamat
				    if (formTes.username.value == "")
				    {
					alert("Username harus diisi");
					formTes.username.focus();
					return false;
				    }
				    // Cek email
				    if (formTes.email.value == "")
				    {
					alert("email haru diisi");
					formTes.email.focus();
					return false;
				    }
				    var filter = new RegExp(
							    "^([a-zA-Z0-9_\.\-])+([a-zA-Z0-9])+\@" +
							    "(([a-zA-Z0-9\-])+\.)+" +
							    "([a-zA-Z0-9]{2,4})+$");
				    if (!filter.test(formTes.email.value))
				    {
					alert("email salah");
					formTes.email.focus();
					return false;
				    }
				    if (formTes.password.value == "")
				    {
					alert("Password harus diisi");
					formTes.password.focus();
					return false;
				    }
				    if (formTes.jk.value == "")
				    {
					alert("Jenis kelamin harus dipilih");
					formTes.jk.focus();
					return false;
				    }
				    else
				    return true;
				}
				/*akhir fungsi untuk validasi data*/
		</script>
	</head>
	<body>
		<div id="header"> <!-- Mulai Header -->
			<center><img src="index/images/judul.png" /></center> <!--Gambar Nangkring-->
		</div> <!-- Berakhir header -->
		<div id="content">
			<div id="login">
				<div class="formSignIn">
					<img src="index/images/SignIn.png" />
					<form method="post" action="login.php">
						<p><input type="text" name="username" value="" placeholder="Username atau Email"></p>
						<p><input type="password" name="password" value="" placeholder="Kata Sandi"></p>
						<!--<p class="Keep_me">
							<label>
								<input type="checkbox" name="Keep_me" id="Keep_me">
								Ingatkan Saya
							</label>
							<a href="#">Lupa Kata Sandi ?</a>
						</p>-->
						<p class="submit"><input type="submit" name="commit" value="Sign In"/></p>
					</form>
				</div>
				<div class="formSignUp">
					<img src="index/images/SignUp.png" />
					<form name="formTes" action="insert.php" method="post" onsubmit="return cekData();"> <!--Pemanggilan fungsi validasi pada form-->
						<p><input type="text" name="nama" value="" placeholder="Masukkan Nama Lengkap"></p>
						<p><input type="text" name="username" value="" placeholder="Username"></p>
						<p><input type="text" name="email" value="" placeholder="Email"></p>
						<p><input type="password" name="password" value="" placeholder="Kata Sandi"></p>
						<p class="radioKu"><input type="radio" name="jk" value="laki-laki" id="laki"/><label for="laki">Laki-laki</label>
						<input type="radio" name="jk" value="perempuan" id="perempuan"/><label for="perempuan">Perempuan</label></p>
						<p class="submit"><input type="submit" name="commit" value="Sign Up" /></p>
					</form>				
				</div>
			</div>
			<div id="sekilas">
				<div id="pengantar">
					<p>Nangkring<p>
					<p>Temukan pengalaman baru, teman-teman baru, event-event seru dan jadilah nongkronger sejati</p>
				</div>
			</div>
		</div>
		<div id="footer">
			<center><hr width="80%" color="white">
			<div id="altnav">
				<a href="#">Tentang</a>
				<a href="#">Pengembang</a>
				<a href="#">Iklan</a>
				<a href="#">Lowongan</a>
				<a href="#">Term of Trade</a>
				<a href="http://www.Gembalak.com/">Gembalak</a>
				<a href="http://www.StrongDeathPeople.blogspot.com/">StrongDeathPeople</a>
			</div>
			<br><h4>Copyright &copy; Gembalak 2014</h4></center>
		</div>
	</body>
</html>