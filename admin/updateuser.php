<?php
include('../koneksi.php');
						$nama = $_POST['nama'];
						$username = $_POST['username'];
						$pass = $_POST['pass'] ;
						$id = $_POST['id'];
if($pass==""){
mysql_query("update tbl_user set
	nama='".$nama."',
	username='".$username."' where id_user='".$id."'
");
} else {

mysql_query("update tbl_user set
	nama='".$nama."',
	username='".$username."',
	pass='".md5($pass)."' where id_user='".$id."'
");
}
?>