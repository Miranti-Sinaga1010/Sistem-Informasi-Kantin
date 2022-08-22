
<?php
	/**
	* 
	*/

$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "parkantins"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
$mysqli = mysqli_connect($host, $username, $password, $database); 

	class koneksiDB
	{
		var $host = "localhost";
		var $username = "root";
		var $password = "";
		var $db = "parkantins";
		var $con;

		

		function __construct(){
	$this->con = mysqli_connect($this->host, $this->username, $this->password,$this->db);
		// mysqli_select_db($this->db);



	}

	function cekLogin($nama, $password){
     $datas = mysqli_query($this->con, "SELECT * FROM user WHERE nama='$nama' and password='$password'");
     $value = mysqli_fetch_array($datas);
     $cek = mysqli_num_rows($datas);
     if ($cek > 0) {
       $_SESSION['id']=true;
       $_SESSION['nama']=$value['nama'];
       $_SESSION['role']=$value['role'];
       return true;
     }else {
       return false;
     }
   }

   function get_sesi(){
     return $_SESSION['id'];
   }  

   function get_status(){
     return $_SESSION['role'];
   }

   function get_nama(){
     return $_SESSION['nama'];
   }

   function logout(){
     $_SESSION['id']=false;
     unset($_SESSION['nama']);
     unset($_SESSION['role']);
     session_destroy();
   }
}


	

?>