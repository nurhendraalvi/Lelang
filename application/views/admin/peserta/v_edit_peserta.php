<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
	<?php foreach($peserta as $u){ ?>
	<table><tr><td>
		<form method="POST" action="<?php echo base_url()."index.php/c_peserta/update"; ?>" enctype="multipart/form-data">
			<table>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><input type="number" name="nik" value="<?php echo $u->NIK ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $u->Nama ?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="password" value="<?php echo $u->pass ?>"></td>
				</tr>
				<tr>
					<td><input type="reset" name="reset" value="reset"></td>
					<td colspan="2"><input type="submit" name="submit" value="simpan"></td>
				</tr>
			</table>
		</form>
	</td></tr></table>
	<?php } ?>
</body>
</html>