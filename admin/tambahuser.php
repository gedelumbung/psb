<?php
include('../koneksi.php');
						$nama = $_POST['nama'];
						$username = $_POST['username'];
						$pass = md5($_POST['pass']);
mysql_query("insert into tbl_user
	(nama,username,pass)
	values
	('$nama','$username','$pass')
");
echo "<div style='background-color:red; text-align:center; padding:5px; color:#fff;'>Data Berhasil dikirim</div>";
?>