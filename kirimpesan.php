<?php
include('koneksi.php');
						$nama = $_POST['nama'];
						$email = $_POST['email'];
						$pesan = $_POST['pesan'] ;
mysql_query("insert into tbl_hubungi
	(nama,email,pesan)
	values
	('$nama','$email','$pesan')
");
echo "<div style='background-color:red; text-align:center; padding:5px; color:#fff;'>Data Berhasil dikirim</div>";
?>