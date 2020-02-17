<!DOCTYPE html>
<html>
<head>
	<title>List data</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>NIK</td>
			<td>Nama</td>
			<td>UserName</td>
			<td>Password</td>
		</tr>
		<?php 
		foreach($peserta as $data)
		{
		?>
		<tr>
			<td>
				<?php echo $data->NIK;?>
			</td>
			<td>
				<?php echo $data->Nama;?>
			</td>
			<td>
				<?php echo $data->username;?>
			</td>
			<td>
				<?php echo $data->pass;?>
			</td>
			<td>
				<?php echo anchor('c_peserta/edit/'.$data->NIK,'Edit'); ?>
				<?php echo anchor('c_peserta/hapus/'.$data->NIK,'Hapus'); ?>	
				<?php echo anchor('c_peserta/index2/'.$data->NIK,'detail'); ?>	
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php echo anchor('c_peserta/tambah','Tambah Data'); ?>
	<a href="<?php echo base_url().'index.php/c_barang/index'?>">Sign Out</a>
	<a href="<?php echo base_url().'index.php/c_login/logout'?>">Sign Out</a>
</body>
</html>