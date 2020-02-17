<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
	<table><tr><td>
		<form method="POST" action="<?php echo base_url()."index.php/c_barang/simpan_aksi"; ?>" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Kode Barang</td>
					<td>:</td>
					<td><input type="text" name="kode_barang" placeholder="masukkan kode barang"></td>
				</tr>
				<tr>
                  <td>UPLOAD FOTO</td>
                  <td>:</td>
                  <td><input type="file" name="gambar"></td>
              	</tr>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input type="text" name="nama_barang" placeholder="masukkan nama barang"></td>
				</tr>
				<tr>
					<td>Jenis Barang</td>
					<td>:</td>
					<td><input type="text" name="jenis" placeholder="masukkan jenis barang"></td>
				</tr>
				<tr>
					<td>Tahun</td>
					<td>:</td>
					<td><input type="text" name="tahun" placeholder="masukkan jenis barang"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td>:</td>
					<td><input type="text" name="deskripsi" placeholder="masukkan deskripsi barang"></td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td>:</td>
					<td><input type="number" name="harga" placeholder="masukkan harga barang"></td>
				</tr>
				<tr>
					<td>Petugas</td>
					<td>:</td>
					<td><input type="text" name="nip" placeholder="masukkan nip petugas"></td>
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