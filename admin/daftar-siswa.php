<script type="text/javascript">
	$(document).ready(function() {
		$(".delbutton").click(function(){
		 var element = $(this);
		 var del_id = element.attr("id");
		 var info = 'id=' + del_id;
		 if(confirm("Anda yakin akan menghapus?"))
		 {
			 $.ajax({
			 type: "POST",
			 url : "hapussiswa.php",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
	})
	</script>
<link href="../thickbox.css" rel="stylesheet" type="text/css" />
<script src="../js/thickbox.js" type="text/javascript"></script>
<h2>Daftar Calon Siswa Yang Telah Terdaftar</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Nama-Nama Calon Siswa Yang Terdaftar</legend>
<table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
<tr><td>No.</td><td>Calon Siswa</td><td>Asal Sekolah</td><td>NUN</td><td colspan="2">Aksi</td></tr>
<?php
include('../koneksi.php');
$q = mysql_query("select * from tbl_siswa order by nun DESC");
$n = 1;
while($r = mysql_fetch_array($q))
{
	if($r['nun']>70){ $warna="#B3D577"; } else {$warna="#D87676";}
	echo '<tr bgcolor="'.$warna.'" class="content"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["sekolah"].'</td><td>'.$r["nun"].'</td>
	<td><a href="edit-siswa.php?id_siswa='.$r['id_siswa'].'" class="thickbox" title="Edit Data Calon Siswa - '.$r["nama"].' - '.$r["sekolah"].'"><div id="box-link">Edit</div></a></td> 
	<td><a href="#" class="delbutton" id="'.$r['id_siswa'].'" href="#" ><div id="box-link">Hapus</div></a></td>
	</tr>';
	$n++;
}
?>
</table>
</fieldset>
	