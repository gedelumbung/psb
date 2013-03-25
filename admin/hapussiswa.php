<?php
include('../koneksi.php');
mysql_query("delete from tbl_siswa where id_siswa='$_POST[id]'");
?>