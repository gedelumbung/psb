		<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						nama: "required",
						username: "required",
						pass: "required",
					},
					messages: {
						nama: "* Kosong",
						username: "* Kosong",
						pass: "* Kosong"
					},
					submitHandler: function(form) {
						// do other stuff for a valid form
						$.post('tambahuser.php', $("#frm").serialize(), function(data) {
							$('#hasil').html(data);
							
							document.frm.nama.value="";
							document.frm.username.value="";
							document.frm.pass.value="";
						});
					}
				});
			});
			</script>
			
<div id="rightPan">
<h2>Tambah Data User / Pengguna</h2>
<div class="cleaner_h5"></div>
<div id="hasil"></div>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Input Data Pengguna / User Baru</legend>
<form method="post" action="" name="frm" id="frm">
<table>
<tr><td>Nama Lengkap</td><td>: <input type="text" name="nama" size="35"></td></tr>
<tr><td>Username</td><td>: <input type="text" name="username" size="35"></td></tr>
<tr><td>Password</td><td>: <input type="text" name="pass" size="35"></td></tr>
<tr><td></td><td><input type="submit" value="Simpan Data" class="button" onclick="tb_remove()"/></td></tr>
</table>
</form>
</fieldset>
</div>
	