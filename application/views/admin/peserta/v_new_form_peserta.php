<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
	<table><tr><td>
		<form method="POST" action="<?php echo base_url()."index.php/c_peserta/simpan_aksi"; ?>" enctype="multipart/form-data">
			<table>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><input type="number" name="nik" placeholder="masukkan nik peserta"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="masukkan peserta"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" placeholder="masukkan username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="password" placeholder="masukkan password"></td>
				</tr>
				<tr>
					<td><input type="reset" name="reset" value="reset"></td>
					<td colspan="2"><input type="submit" name="submit" value="simpan"></td>
				</tr>
			</table>
		</form>
	</td></tr></table>
</body>
</html>