
		<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						nama: "required",
						username: "required"
					},
					messages: {
						nama: "* Kosong",
						username: "* Kosong"
					},
					submitHandler: function(form) {
						// do other stuff for a valid form
						$.post('updateuser.php', $("#frm").serialize(), function(data) {
							$('#hasil').html(data);
						});
					}
				});
			});
			</script>
<style>
#rightPan{width:100%; float:left; background-color:#F6F4E4;}
#rightPan fieldset{ margin:15px;}
#rightPan form input{ margin:3px 0 2px 35px; padding:10px; border:1px solid #666666;}
#rightPan form label{ margin:2px 0 0 35px; font:11px Arial, Helvetica, sans-serif; font-weight:bold;}
#rightPan form input.button{ padding:10px; cursor:pointer; background:#FF9900;}
#rightPan h2{ height:36px; color:#8F146E; font-size:16px; padding:0 0 0 75px; margin:0px 0 0 3px;}
</style>
<div id="rightPan">
<h2>Edit Data Pengguna / User</h2>
<div class="cleaner_h5"></div>
<fieldset>
<legend>Edit Data Pengguna / User Pendaftaran Online</legend>
<form method="post" action="" name="frm" id="frm">
<table>
<?php
include('../koneksi.php');
$q = mysql_query("select * from tbl_user where id_user='$_GET[id_user]'");
while($r=mysql_fetch_array($q))
{
?>
<input type="hidden" name="id" value="<?php echo $r['id_user']; ?>" />
<tr><td>Nama Lengkap</td><td>: <input type="text" name="nama" size="45" value="<?php echo $r['nama']; ?>"></td></tr>
<tr><td>Username</td><td>: <input type="text" name="username" size="45" value="<?php echo $r['username']; ?>"></td></tr>
<tr><td>Password</td><td>: <input type="text" name="pass" size="45"> * Kosongkan Jika Tidak Diubah</td></tr>
<tr><td></td><td><input type="submit" value="Simpan Data" class="button" onclick="tb_remove()"/></td></tr>
<?php
}
?>
</table>
</form>
</fieldset>
</div>
	