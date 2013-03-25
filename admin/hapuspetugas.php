<?php
include('../koneksi.php');
mysql_query("delete from tbl_user where id_user='$_POST[id]'");
?>