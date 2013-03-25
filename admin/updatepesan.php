<?php
include('../koneksi.php');
						$nama = $_POST['nama'];
						$email = $_POST['email'];
						$pesan = $_POST['pesan'] ;
						$id = $_POST['id'];
mysql_query("update tbl_hubungi set
	nama='".$nama."',
	email='".$email."',
	pesan='".$pesan."' where id_hubungi='".$id."'
");
?>