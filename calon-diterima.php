<h2>Calon Siswa Yang Telah Diterima dan Ditolak</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Nama-Nama Calon Siswa Diterima dan Ditolak</legend>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Calon Siswa</td><td>Asal Sekolah</td><td>NUN</td></tr>
<?php
include('koneksi.php');
$q = mysql_query("select * from tbl_siswa order by nun DESC");
$n = 1;
while($r = mysql_fetch_array($q))
{
	if($r['nun']>70){ $warna="#B3D577"; } else {$warna="#D87676";}
	echo '<tr bgcolor="'.$warna.'"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["sekolah"].'</td><td>'.$r["nun"].'</td></tr>';
	$n++;
}
?>
</table>
</fieldset>
	