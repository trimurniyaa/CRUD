<?php

//include dataase connection file

include_once("config.php");

//check if from is submitted for data siswa update,then redirect to homepage after update

if (isset($_POST['update'])) {
		$Id_siswa =$_POST['Id_siswa'];

		$Nis = $_POST ['nis'];
		$Nama = $_POST['nama'];
		$Jenis_Kelamin =$_POST ['jk'];
		$Alamat = $_POST ['alamat'];
		$Kelas = $_POST ['kelas'];

	//update data siswa
	$result =  mysqli_query($mysqli, "UPDATE data_siswa SET Nis='$Nis',Nama='$Nama',Jenis_Kelamin='$Jenis_Kelamin',Alamat='$Alamat',Kelas='$Kelas', WHERE Id_siswa=$Id_siswa");

	header("Location:index.php");
}
?>
<?php
//Display selected user data based on id
//Getting id from url
$Id_siswa =$_GET['Id_siswa'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT *  FROM data_siswa WHERE Id_siswa=$Id_siswa");

while($data_siswa = mysqli_fetch_array($result))
{
	$Nis =$data_siswa['NIS'];
	$Nama =$data_siswa['Nama'];
	$Jenis_Kelamin =$data_siswa['Jenis_Kelamin'];
	$Alamat =$data_siswa['Alamat'];
	$Kelas =$data_siswa['Kelas'];
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Siswa</title>
</head>
<body>
	<a href="index.php">Home</a>
	<form name="update" action="edit.php" method="post">
		<table>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" value=<?php echo $Nis;?>></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $Nama;?>></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk" value=<?php echo $Jenis_Kelamin;?>></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value=<?php echo $Alamat;?>></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $Kelas;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['Id_siswa'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>