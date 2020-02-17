<?php 
	$user = $this->session->userdata('ses_id');
?>
<!DOCTYPE html>
<html>
<head>
	<title>List data</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Kode Barang</td>
			<td>Gambar</td>
			<td>Nama Barang</td>
			<td>Jenis</td>
			<td>Tahun</td>
			<td>Deskripsi</td>
			<td>Harga</td>
			<td>NIP</td>
			<td>Keterangan</td>
		</tr>
		<?php 
		foreach($barang as $data)
		{
		?>
		<tr>
			<td>
				<?php echo $data->Kode_Barang;?>
			</td>
			<td>
				<img src="<?php echo base_url('gambar/').$data->Nama_File; ?>" width="200px" height="200px">
			</td>
			<td>
				<?php echo $data->Nama_Barang;?>
			</td>
			<td>
				<?php echo $data->Jenis;?>
			</td>
			<td>
				<?php echo $data->Tahun;?>
			</td>
			<td>
				<?php echo $data->Deskripsi;?>
			</td>
			<td>
				<?php echo $data->Harga;?>
			</td>
		</tr>		
	</table>
	<table><tr><td>
		<form method="POST" action="<?php echo base_url()."index.php/c_proses_lelang/tawar"; ?>">
			<table>
				<tr>
					<td colspan="3"><input type="hidden" name="kode_barang" value="<?php echo $data->Kode_Barang;?>"></td>
				</tr>
				<tr>
					<td colspan="3"><input type="hidden" name="harga" value="<?php echo $data->Harga;?>"></td>
				</tr>
				<tr>
					<td colspan="3"><input type="hidden" name="user" value="<?php echo $user;?>"></td>
				</tr>
				<tr>
					<td>Harga Penawaran</td>
					<td>:</td>
					<td><input type="number" name="penawaran" placeholder="masukkan harga penawaran"></td>
				</tr>
				<tr>
					<td><input type="reset" name="reset"></td>
					<td colspan="2"><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</td></tr></table>
	<?php } ?>
	<a href="<?php echo base_url().'index.php/c_login/logout'?>">Sign Out</a>
</body>
</html>