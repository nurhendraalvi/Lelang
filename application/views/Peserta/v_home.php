<!DOCTYPE html>
<html>
<head>
	<title>List data</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url()."index.php/c_barang/index3"; ?>">
		<input type="text" name="cari" placeholder="masukkan nama barang yang ingin dicari">
		<input type="submit" name="submit" value="cari">
	</form>
	<table border="1">
		<tr>
			<td>Kode Barang</td>
			<td>Nama Barang</td>
			<td>Jenis</td>
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
				<?php echo $data->Nama_Barang;?>
			</td>
			<td>
				<?php echo $data->Jenis;?>
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
	<a href="<?php echo base_url().'index.php/c_login/logout'?>">Sign Out</a>
</body>
</html>