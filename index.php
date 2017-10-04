<?php 
	include "koneksi.php"
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Buku Telepon</title>
</head>
<body>
<table width="40%" align="center" border="1">
	<tr>
		<td colspan="5"><h2><center>Buku Telepon</center></h2>
		<a href="tambah.php">Tambah Data</a></td>
	</tr>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telepon</th>
		<th>Opsi</th>
	</tr>
	<?php 
		$no = 1;
		$qry = mysqli_query($koneksi,"SELECT * FROM buku_telepon");
		while ($buku_telepon=mysqli_fetch_array($qry)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $buku_telepon['nama']; ?></td>
		<td><?php echo $buku_telepon['alamat']; ?></td>
		<td><?php echo $buku_telepon['telepon']; ?></td>
		<td>
			<a onclick="return confirm('Apakah anda ingin menghapus ?')" href="hapus.php?id=<?php echo $buku_telepon['id'] ?>">Hapus</a>

			<a href="edit.php?id=<?php echo $buku_telepon['id'] ?>"">Edit</a>
		</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>