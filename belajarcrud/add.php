<!DOCTYPE html>
<html>
<head>
	<title>Tambah Siswa</title>
</head>
<body>
	<a href="index.php">Kembali ke halaman awal</a>
	<br>
	<form action="add.php" method="post" name="form1">
		<table>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
<?php
	if (isset($_POST['submit'])) {
		$Nis = $_POST ['nis'];
		$Nama = $_POST['nama'];
		$Jenis_Kelamin =$_POST ['jk'];
		$Alamat = $_POST ['alamat'];
		$Kelas = $_POST ['kelas'];

		#connection file
		include_once("config.php");

		#insert data siswa into table

		$result = mysqli_query($mysqli, "INSERT INTO data_siswa (Nis, Nama, Jenis_Kelamin, Alamat, Kelas) VALUES ('$Nis','$Nama', '$Jenis_Kelamin', '$Alamat', '$Kelas' )");

		#show message when data siswa added
		echo "Data siswa Berhasil Ditambahkan.<a href='index.php'>View Data Siswa </a>";

	}

?>
</body>
</html>