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
			<td>
				<?php echo $data->NIP;?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php echo anchor('c_barang/tambah','Tambah Data'); ?>
	<a href="<?php echo base_url().'index.php/c_login/logout'?>">Sign Out</a>
</body>
</html>