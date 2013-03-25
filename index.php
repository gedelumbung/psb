<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Pendaftaran Siswa Baru</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

});

$(function() {
	$('#loading').ajaxStart(function(){
		$(this).fadeIn();
	}).ajaxStop(function(){
		$(this).fadeOut();
	});

	$('#leftPan ul li a').click(function() {
		var url = $(this).attr('href');
		$('#ambil').load(url);
		return false;
	});
});
</script>
</head>
<div id="loading" style="display:none"><img src="images/loading.gif" /><br />Data ne sik Loading rek...!!! Enteni disek.</div>
<body>
<div id="mainPan">
  <div id="leftPan">
  	<div id="leftTopPan">
		<a href="index.php"><img src="images/logo.gif" title="Consultant" alt="Consultant" border="0" /></a> </div>
		<ul>
			<li><a href="home.php">Beranda</a></li>
			<li><a href="daftar-baru.php">Pendaftaran Siswa Baru</a></li>
			<li><a href="calon-terdaftar.php">Calon Siswa Terdaftar</a></li>
			<li><a href="calon-diterima.php">Calon Siswa Diterima</a></li>
			<li><a href="tentang-kami.php">Tentang Kami</a></li>
			<li><a href="grafik-pendaftaran.php">Grafik Pendaftaran</a></li>
			<li><a href="hubungi-kami.php">Hubungi Kami</a></li>
		</ul>
		<form action="login-admin.php" method="post">
			<h2>Administrator Login</h2>
			<label>Log In:</label>
		<input type="text" id="Yourname" name="username" value="Username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';"  />
		<label>Password:</label>
		<input name="password" type="password" id="password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';"  />
		<input name="" type="submit" class="button" value="Login" />
		</form>
  </div>
  
  <div id="rightPan">
  	<h1>Sistem Online Pendaftaran Siswa Baru<br /><p>Sekolan Menengah Atas Negeri 1 Wongsorejo</p> </h1>
	<div id="ambil">
	<h2>Selamat Datang di Sistem Online Pendaftaran Siswa Baru</h2>
	<p>Tes Soal Online merupakan bagian dari sistem pembelajaran digital atau e-learning. Dimana kita diharapkan untuk bisa belajar secara mandiri tanpa terbatas oleh waktu dan tempat. Semoga melalui E-Learning dan Sistem Tes Soal Online ini, dapat tercapainya proses pembelajaran yang efektif dan efisien. Salam Hangat.</p>
	<div class="cleaner_h20"></div>
	<ul>
	<li>Isi user ID dan password dengan benar. Jika belum tahu atau tidak berhasil, tanyakan pada pengawas, jika anda telah mengisi dengan benar maka nama ada akan muncul di layar sebelah kiri (side bar).</li>
	<li>Pilih soal sesuai petunjuk guru atau pengawas, isi password soal dengan benar.</li>
	<li>Selama mengerjakan soal tidak perlu menggunakan keyboard. Penekanan ENTER akan dianggap anda telah menyelesaikan soal.</li>
	<li>Kerjakan soal secara hati-hati, klik pada lingkaran di sebelah kiri pilihan yang kamu anggap benar.</li>
	<li>Perhatikan waktu tersisa di atas jika mencapai 0 menit, soal akan ditutup dan dikoreksi secara otomatis.</li>
	<li>Jika anda sudah menyelesaikan soal sebelum waktu habis, klik tombol selesai pada lembar soal bagian paling bawah.</li>
	</ul>
	</div>
  </div>
</div>
<div class="cleaner_h60"></div>
<div class="cleaner_h50"></div>
<div id="footermainPan">
  <div id="footerPan">
  Beranda | Pendaftaran Siswa Baru | Calon Siswa Terdaftar | Calon Siswa Diterima | Tentang Kami | Grafik Pendaftaran | Hubungi Kami
  <br />
  CopyLeft Pendaftaran Siswa Baru - SMA Negeri 1 Wongsorejo - 2011
  </div>
</div>
</body>
</html>
