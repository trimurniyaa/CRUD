<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM data_siswa ORDER BY Id_siswa DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
</head>
<body>
	<table width="80%" border="1">
		<tr>
			<th>NIS</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>
				Action
			<br>
			<a href="add.php">Tambah Siswa</a>
			</th>
		</tr>
		<?php
			while ($data_siswa = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$data_siswa['NIS']."</td>";
				echo "<td>".$data_siswa['Nama']."</td>";
				echo "<td>".$data_siswa['Jenis_Kelamin']."</td>";
				echo "<td>".$data_siswa['Kelas']."</td>";
				echo "<td>".$data_siswa['Alamat']."</td>";
				echo "<td><a href='edit.php?Id_siswa=$data_siswa[Id_siswa]'>Edit</a> | <a href='#'>Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>