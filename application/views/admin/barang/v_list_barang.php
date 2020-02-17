<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>List data</title>
	<!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('style/css/bootstrap.min.css')?>" rel="stylesheet">
</head>
<body>
	<table border="1">
		<tr>
			<td>Kode Barang</td>
			<td>Gambar</td>
			<td>Nama Barang</td>
			<td>Jenis</td>
			<td>Tahun</td>
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
				<?php echo $data->Harga;?>
			</td>
			<td>
				<?php echo $data->NIP;?>
			</td>
			<td>
				<?php echo anchor('c_barang/edit/'.$data->Kode_Barang,'Edit'); ?>
				<?php echo anchor('c_barang/hapus/'.$data->Kode_Barang,'Hapus'); ?>	
				<?php echo anchor('c_barang/index2/'.$data->Kode_Barang,'detail'); ?>	
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php echo anchor('c_barang/tambah','Tambah Data'); ?>
	<a href="<?php echo base_url().'index.php/c_peserta/index'?>">Data Peserta</a>
	<a href="<?php echo base_url().'index.php/c_login/logout'?>">Sign Out</a>
</body>
</html>