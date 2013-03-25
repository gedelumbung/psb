<?php
include('koneksi.php');
						$nama = $_POST['nama'];
						$alamat = $_POST['alamat'];
						$tempat_lahir = $_POST['tempat_lahir'] ;
						$tanggal_lahir = $_POST['tanggal_lahir'] ;
						$sekolah_asal = $_POST['sekolah_asal'] ;
						$ind = $_POST['bhs_indo'] ;
						$ing = $_POST['bhs_ing'] ;
						$mat = $_POST['matematika'] ;
						$ipa = $_POST['ipa'] ;
						$ips = $_POST['ips'] ;
						$ppkn = $_POST['ppkn'] ;
						$ortu = $_POST['nama_orang_tua'] ;
						$nun = $_POST['nun'] ;
						$alamat_ortu = $_POST['alamat_orang_tua'] ;
						$pendidikan = $_POST['pendidikan_terakhir'] ;
						$pekerjaan = $_POST['pekerjaan'] ;
						$penghasilan = $_POST['penghasilan'];
mysql_query("insert into tbl_siswa
	(nama,alamat,tmp_lahir,tgl_lahir,sekolah,ind,ing,mat,ipa,ips,ppkn,nun,ortu,alamat_ortu,pendidikan,pekerjaan,penghasilan)
	values
	('$nama','$alamat','$tempat_lahir','$tanggal_lahir','$sekolah_asal','$ind','$ing','$mat','$ipa','$ips','$ppkn','$nun','$ortu','$alamat_ortu',
	'$pendidikan','$pekerjaan','$penghasilan')
");
echo "Data Berhasil dikirim";
?>