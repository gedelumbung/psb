<?php
	$nama_file = date('DMY')."_laporan_data_calon_siswa.xls";
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Disposition: attachment;filename=".$nama_file."");
	header("Content-Transfer-Encoding: binary ");
?>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Calon Siswa</td><td>Alamat</td><td>Tempat Lahir</td><td>Tanggal Lahir</td><td>Asal Sekolah</td><td>Bahasa Indonesia</td><td>Bahasa Inggris</td><td>Matematika</td><td>IPA</td><td>IPS</td><td>PPKN</td><td>NUN</td><td>Nama Orang Tua</td><td>Alamat Orang Tua</td><td>Pendidikan</td><td>Pekerjaan</td><td>Penghasilan</td></tr>
<?php
include('../koneksi.php');
$q = mysql_query("select * from tbl_siswa order by nun DESC");
$n = 1;
while($r = mysql_fetch_array($q))
{
	if($r['nun']>70){ $warna="#B3D577"; } else {$warna="#D87676";}
	echo '<tr bgcolor="'.$warna.'"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["alamat"].'</td><td>'.$r["tmp_lahir"].'</td>
	<td>'.$r["tgl_lahir"].'</td> <td>'.$r["sekolah"].'</td><td>'.$r["ind"].'</td><td>'.$r["ing"].'</td>
	<td>'.$r["mat"].'</td> <td>'.$r["ipa"].'</td><td>'.$r["ips"].'</td><td>'.$r["ppkn"].'</td>
	<td>'.$r["nun"].'</td> <td>'.$r["ortu"].'</td><td>'.$r["alamat_ortu"].'</td><td>'.$r["pendidikan"].'</td>
	<td>'.$r["pekerjaan"].'</td><td>'.$r["penghasilan"].'</td> 
	</tr>';
	$n++;
}
?>
</table>
	