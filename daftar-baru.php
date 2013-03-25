		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
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
						$.post('kirimpendaftaran.php', $("#frm").serialize(), function(data) {
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
<h2>Form Pendaftaran Online Siswa Baru SMAN 1 Wongsorejo</h2>
	<p>Tes Soal Online merupakan bagian dari sistem pembelajaran digital atau e-learning. Dimana kita diharapkan untuk bisa belajar secara mandiri tanpa terbatas oleh waktu dan tempat. Semoga melalui E-Learning dan Sistem Tes Soal Online ini, dapat tercapainya proses pembelajaran yang efektif dan efisien. Salam Hangat.</p>
	<div class="cleaner_h10"></div>
<form name="frm" method="post" id="frm">
<fieldset>
<legend>Silahkan Isi Form Pendaftaran di Bawah Ini</legend>
<table>
<tr><td>Nama Lengkap</td><td>: <input type="text" name="nama" size="30"></td></tr>
<tr><td>Alamat</td><td>: <input type="text" name="alamat" size="30"></td></tr>
<tr><td>Tempat Lahir</td><td>: <input type="text" name="tempat_lahir" size="30"></td></tr>
<tr><td>Tanggal Lahir</td><td>: <input type="text" name="tanggal_lahir" size="30" id="tanggal_lahir"></td></tr>
<tr><td>Sekolah Asal</td><td>: <input type="text" name="sekolah_asal" size="30"></td></tr>
<tr><td colspan="2">
<fieldset>
<legend>Nilai Ujian Nasional</legend>
<table>
<tr><td width="150">Bahasa Indonesia</td><td>: <input type="text" name="bhs_indo" size="5" maxlength="3" onchange="hitNilai()" value="0"></td></tr>
<tr><td>Bahasa Inggris</td><td>: <input type="text" name="bhs_ing" size="5" maxlength="3" onchange="hitNilai()" value="0"></td></tr>
<tr><td>Matematika</td><td>: <input type="text" name="matematika" size="5" maxlength="3" onchange="hitNilai()" value="0"></td></tr>
<tr><td>IPA</td><td>: <input type="text" name="ipa" size="5" maxlength="3" onchange="hitNilai()" value="0"></td></tr>
<tr><td>IPS</td><td>: <input type="text" name="ips" size="5" maxlength="3" onchange="hitNilai()" value="0"></td></tr>
<tr><td>PPKN</td><td>: <input type="text" name="ppkn" size="5" maxlength="3" onchange="hitNilai()" value="0"></td></tr>
</table>
</fieldset>
</td></tr>
<tr><td>NUN</td><td>: <input type="text" name="nun" size="30" readonly="readonly"></td></tr>
<tr><td>Nama Orang Tua / Wali</td><td>: <input type="text" name="nama_orang_tua" size="30"></td></tr>
<tr><td>Alamat Orang Tua</td><td>: <input type="text" name="alamat_orang_tua" size="30"></td></tr>
<tr><td>Pendidikan Terakhir</td><td>: <input type="text" name="pendidikan_terakhir" size="30"></td></tr>
<tr><td>Pekerjaan</td><td>: <input type="text" name="pekerjaan" size="30"></td></tr>
<tr><td>Penghasilan Orang Tua</td><td>: <input type="text" name="penghasilan" size="30"></td></tr>
<tr><td></td><td><input type="submit" value="Kirim Pendaftaran" class="button"/></td></tr>
</table>
<div id="hasil" style=" background-color:#FF0000; color:#FFFFFF; text-align:center;"></div>
</fieldset>
</form>