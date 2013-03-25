<?php
include('../koneksi.php');
						$nama = $_POST['nama'];
						$alamat = $_POST['alamat'];
						$tempat_lahir = $_POST['tempat_lahir'] ;
						$tanggal_lahir = $_POST['tanggal_lahir'] ;
						$sekolah = $_POST['sekolah_asal'] ;
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
						$id = $_POST['id'];
mysql_query("update tbl_siswa set
	nama='".$nama."',
	alamat='".$alamat."',
	tmp_lahir='".$tempat_lahir."',
	tgl_lahir='".$tanggal_lahir."',
	sekolah='".$sekolah."',
	ind='".$ind."',
	ing='".$ing."',
	mat='".$mat."',
	ipa='".$ipa."',
	ips='".$ips."',
	ppkn='".$ppkn."',
	nun='".$nun."',
	ortu='".$ortu."',
	alamat_ortu='".$alamat_ortu."',
	pendidikan='".$pendidikan."',
	pekerjaan='".$pekerjaan."',
	penghasilan='".$penghasilan."' where id_siswa='".$id."'
");
?>