<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$qe =mysqli_query($koneksi,"SELECT * FROM buku_telepon WHERE id='$id'");
	$buku_telepon = mysqli_fetch_array($qe);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<form method="post">
	<input type="text" name="nama" value="<?php echo $buku_telepon['nama'];?>">
	<br>
	<textarea name="alamat"><?php echo $buku_telepon['alamat'] ?></textarea>
	<br>
	<input type="text" name="telepon" value="<?php echo $buku_telepon['telepon'];?>">
	<br>
	<input type="submit" name="edit" value="Edit">
</form>
<?php 
	if (isset($_POST['edit'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
		$tambah = mysqli_query($koneksi,"UPDATE buku_telepon SET nama='$nama',alamat='$alamat',telepon='$telepon' WHERE id='$id'");
		if ($tambah) {
			?>
			<script type="text/javascript">
				alert('Edit Data Berhasil');
				document.location.href="index.php";
			</script>
			<?php
		}else{
			echo "Gagal Mengedit Data";
		}
	}
?>
</body>
</html>