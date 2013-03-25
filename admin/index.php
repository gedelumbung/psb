<?php
session_start();
if(empty($_SESSION['namauser']) and empty($_SESSION['kode']))
{
	echo "<p>Anda tidak berhak mengakses halaman ini.</p>";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Pendaftaran Siswa Baru</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
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
<div id="loading" style="display:none"><img src="../images/loading.gif" /><br />Data ne sik Loading rek...!!! Enteni disek.</div>
<body>
<div id="mainPan">
  <div id="leftPan">
  	<div id="leftTopPan">
		<a href="index.php"><img src="../images/logo.gif" title="Consultant" alt="Consultant"/></a> </div>
		<ul>
			<li><a href="home.php">Beranda</a></li>
			<li><a href="daftar-siswa.php">Daftar Calon Siswa</a></li>
			<li><a href="daftar-user.php">Daftar User / Pengguna</a></li>
			<li><a href="tambah-user.php">Tambah Pengguna</a></li>
			<li><a href="export-excell.php">Export Laporan ke Excell</a></li>
			<li><a href="hubungi.php">Hubungi Kami</a></li>
			<li><a href="grafik-pendaftaran.php">Grafik Pendaftaran</a></li>
			<li><a href="logout.php">Keluar / Log Out</a></li>
		</ul>
	<div style="padding:10px;">Selamat Datang, <b><?php echo $_SESSION['namauser']; ?></b><br />Anda login sebagai : <strong><?php echo $_SESSION['username']; ?></strong></div>
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
  Beranda | Daftar Calon Siswa | Daftar User / Pengguna | Tambah Pengguna | Export Laporan ke Excell | Hubungi Kami | Log Out
  <br />
  CopyLeft Pendaftaran Siswa Baru - SMA Negeri 1 Wongsorejo - 2011
  </div>
</div>
</body>
</html>
<?php
}
?>