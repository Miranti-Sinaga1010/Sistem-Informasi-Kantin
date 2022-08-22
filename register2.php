<?php

if (isset($_POST['submit'])) {
	// include 'koneksi.php';
echo "mhank";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$asrama = $_POST['asrama'];
$prodi = $_POST['prodi'];
$role =$_POST['role'];

include_once ("config.php")	;
echo "mhank";
echo $nim;

$result = mysqli_query($mysqli, "INSERT INTO user (nim, nama, username,password, asrama, prodi,role) VALUES('$nim','$nama','$username','$password','$asrama', '$prodi',$role)");



// $sql = $pdo->prepare("INSERT INTO user(nim, nama, username,password, asrama, prodi) VALUES('$nim','$nama','$username','$password','$asrama', '$prodi')");

// $sql->bindParam(':nim', $nim);
// $sql->bindParam(':nama', $nama);
// $sql->bindParam(':username', $username);
// $sql->bindParam(':password', $password);
// $sql->bindParam(':asrama', $asrama);
// $sql->bindParam(':prodi', $prodi);
// $sql->execute();

// echo $nim;
// echo $nama;
// echo $username;
// echo $password;
// echo $asrama;
// echo $prodi;

header('location:indexm.php');
// echo"Registrasi success<br><a href=index.php><font color=blue>Back to
// Home</font></a>";


}	

?>
