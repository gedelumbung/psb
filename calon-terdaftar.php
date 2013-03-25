<h2>Calon Siswa Yang Telah Terdaftar</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Nama-Nama Calon Siswa Yang Telah Terdaftar</legend>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Calon Siswa</td><td>Tempat/Tanggal Lahir</td><td>Asal Sekolah</td></tr>
<?php
include('koneksi.php');
$q = mysql_query("select * from tbl_siswa");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tr><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["tmp_lahir"].', '.$r["tgl_lahir"].'</td><td>'.$r["sekolah"].'</td></tr>';
	$n++;
}
?>
</table>
</fieldset>
	