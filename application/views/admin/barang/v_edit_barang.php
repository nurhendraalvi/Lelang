<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
	<?php foreach($barang as $u){ ?>
	<table><tr><td>
		<form method="POST" action="<?php echo base_url()."index.php/c_barang/update"; ?>" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Kode Barang</td>
					<td>:</td>
					<td><input type="text" name="kode_barang" value="<?php echo $u->Kode_Barang ?>"></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input type="text" name="nama_barang" value="<?php echo $u->Nama_Barang ?>"></td>
				</tr>
				<tr>
					<td>Jenis Barang</td>
					<td>:</td>
					<td><input type="text" name="jenis" value="<?php echo $u->Jenis ?>"></td>
				</tr>
				<tr>
					<td>Tahun</td>
					<td>:</td>
					<td><input type="text" name="tahun" placeholder="masukkan tahun"></td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td>:</td>
					<td><input type="number" name="harga" value="<?php echo $u->Harga ?>"></td>
				</tr>
				<tr>
					<td>Petugas</td>
					<td>:</td>
					<td><input type="text" name="nip" value="<?php echo $u->NIP ?>"></td>
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