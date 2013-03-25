
		<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						nama: "required",
						alamat: "required",
						tempat_lahir: "required",
						tanggal_lahir: "required",
						sekolah_asal: "required",
						bhs_indo: "required",
						bhs_ing: "required",
						matematika: "required",
						ipa: "required",
						ips: "required",
						ppkn: "required",
						nama_orang_tua: "required",
						alamat_orang_tua: "required",
						pendidikan_terakhir: "required",
						pekerjaan: "required",
						penghasilan: "required"
					},
					messages: {
						nama: "* Kosong",
						alamat: "* Kosong",
						tempat_lahir: "* Kosong",
						tanggal_lahir: "* Kosong",
						sekolah_asal: "* Kosong",
						bhs_indo: "* Kosong",
						bhs_ing: "* Kosong",
						matematika: "* Kosong",
						ipa: "* Kosong",
						ips: "* Kosong",
						ppkn: "* Kosong",
						nama_orang_tua: "* Kosong",
						alamat_orang_tua: "* Kosong",
						pendidikan_terakhir: "* Kosong",
						pekerjaan: "* Kosong",
						penghasilan: "* Kosong",
					},
					submitHandler: function(form) {
						// do other stuff for a valid form
						$.post('updatesiswa.php', $("#frm").serialize(), function(data) {
							$('#hasil').html(data);
							
						document.frm.nama.value = "";
						document.frm.alamat.value = "";
						document.frm.tempat_lahir.value = "";
						document.frm.tanggal_lahir.value = "";
						document.frm.sekolah_asal.value = "";
						document.frm.bhs_indo.value = "0";
						document.frm.bhs_ing.value = "0";
						document.frm.matematika.value = "0";
						document.frm.ipa.value = "0";
						document.frm.ips.value = "0";
						document.frm.ppkn.value = "0";
						document.frm.nun.value = "";
						document.frm.nama_orang_tua.value = "";
						document.frm.alamat_orang_tua.value = "";
						document.frm.pendidikan_terakhir.value = "";
						document.frm.pekerjaan.value = "";
						document.frm.penghasilan.value = "";
						});
					}
				});
			});
			</script>
		<script type="text/javascript">
			$(function(){
                                $('#tanggal_lahir').datepicker({dateFormat: 'd MM yy'});
			});
		</script>
		<script>
		function hitNilai()
		{
			ind = parseInt(document.frm.bhs_indo.value);
			ing = parseInt(document.frm.bhs_ing.value);
			mat = parseInt(document.frm.matematika.value);
			ipa = parseInt(document.frm.ipa.value);
			ips = parseInt(document.frm.ips.value);
			ppkn = parseInt(document.frm.ppkn.value);
			jml = parseInt((ind+ing+mat+ipa+ips+ppkn)/6);
			document.frm.nun.value = jml;
		}
		</script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/sunny/jquery-ui.css" type="text/css" rel="stylesheet"/>

<style>
#rightPan{width:100%; float:left; background-color:#F6F4E4;}
#rightPan fieldset{ margin:15px;}
#rightPan form input{ margin:3px 0 2px 35px; padding:10px; border:1px solid #666666;}
#rightPan form label{ margin:2px 0 0 35px; font:11px Arial, Helvetica, sans-serif; font-weight:bold;}
#rightPan form input.button{ padding:10px; cursor:pointer; background:#FF9900;}
#rightPan h2{ height:36px; color:#8F146E; font-size:16px; padding:0 0 0 75px; margin:0px 0 0 3px;}
</style>
<div id="rightPan">
<h2>Edit Data Calon Siswa</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Nama-Nama Calon Siswa Yang Terdaftar</legend>
<form method="post" action="" name="frm" id="frm">
<table>
<?php
include('../koneksi.php');
$q = mysql_query("select * from tbl_siswa where id_siswa='$_GET[id_siswa]'");
while($r=mysql_fetch_array($q))
{
?>
<input type="hidden" name="id" value="<?php echo $r['id_siswa']; ?>" />
<tr><td>Nama Lengkap</td><td>: <input type="text" name="nama" size="65" value="<?php echo $r['nama']; ?>"></td></tr>
<tr><td>Alamat</td><td>: <input type="text" name="alamat" size="65" value="<?php echo $r['alamat']; ?>"></td></tr>
<tr><td>Tempat Lahir</td><td>: <input type="text" name="tempat_lahir" size="65" value="<?php echo $r['tmp_lahir']; ?>"></td></tr>
<tr><td>Tanggal Lahir</td><td>: <input type="text" name="tanggal_lahir" size="65" id="tanggal_lahir" value="<?php echo $r['tgl_lahir']; ?>"></td></tr>
<tr><td>Sekolah Asal</td><td>: <input type="text" name="sekolah_asal" size="65" value="<?php echo $r['sekolah']; ?>"></td></tr>
<tr><td colspan="2">
<fieldset>
<legend>Nilai Ujian Nasional</legend>
<table>
<tr><td width="150">Bahasa Indonesia</td><td>: <input type="text" name="bhs_indo" size="25" maxlength="3" onchange="hitNilai()" value="<?php echo $r['ind']; ?>"></td></tr>
<tr><td>Bahasa Inggris</td><td>: <input type="text" name="bhs_ing" size="25" maxlength="3" onchange="hitNilai()" value="<?php echo $r['ing']; ?>"></td></tr>
<tr><td>Matematika</td><td>: <input type="text" name="matematika" size="25" maxlength="3" onchange="hitNilai()" value="<?php echo $r['mat']; ?>"></td></tr>
<tr><td>IPA</td><td>: <input type="text" name="ipa" size="25" maxlength="3" onchange="hitNilai()" value="<?php echo $r['ipa']; ?>"></td></tr>
<tr><td>IPS</td><td>: <input type="text" name="ips" size="25" maxlength="3" onchange="hitNilai()" value="<?php echo $r['ips']; ?>"></td></tr>
<tr><td>PPKN</td><td>: <input type="text" name="ppkn" size="25" maxlength="3" onchange="hitNilai()" value="<?php echo $r['ppkn']; ?>"></td></tr>
</table>
</fieldset>
</td></tr>
<tr><td>NUN</td><td>: <input type="text" name="nun" size="65" readonly="readonly" value="<?php echo $r['nun']; ?>"></td></tr>
<tr><td>Nama Orang Tua / Wali</td><td>: <input type="text" name="nama_orang_tua" size="65" value="<?php echo $r['ortu']; ?>"></td></tr>
<tr><td>Alamat Orang Tua</td><td>: <input type="text" name="alamat_orang_tua" size="65" value="<?php echo $r['alamat_ortu']; ?>"></td></tr>
<tr><td>Pendidikan Terakhir</td><td>: <input type="text" name="pendidikan_terakhir" size="65" value="<?php echo $r['pendidikan']; ?>"></td></tr>
<tr><td>Pekerjaan</td><td>: <input type="text" name="pekerjaan" size="65" value="<?php echo $r['pekerjaan']; ?>"></td></tr>
<tr><td>Penghasilan Orang Tua</td><td>: <input type="text" name="penghasilan" size="65" value="<?php echo $r['penghasilan']; ?>"></td></tr>
<tr><td></td><td><input type="submit" value="Kirim Pendaftaran" class="button" onclick="tb_remove()"/></td></tr>
<?php
}
?>
</table>
</form>
</fieldset>
</div>
	