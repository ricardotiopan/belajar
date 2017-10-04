<?php 
	include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<form method="post">
	<input type="text" name="nama" placeholder="Nama">
	<br>
	<textarea name="alamat" placeholder="Alamat"></textarea>
	<br>
	<input type="text" name="telepon" placeholder="Telepon">
	<br>
	<input type="submit" name="simpan" value="Simpan">
</form>
<?php 
	if (isset($_POST['simpan'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
		$tambah = mysqli_query($koneksi,"INSERT INTO buku_telepon(nama,alamat,telepon)VALUES('$nama','$alamat','$telepon')");
		if ($tambah) {
			?>
			<script type="text/javascript">
				alert('Tambah Data Berhasil');
				document.location.href="index.php";
			</script>
			<?php
		}else{
			echo "Gagal Menambahkan Data";
		}
	}
?>
</body>
</html>