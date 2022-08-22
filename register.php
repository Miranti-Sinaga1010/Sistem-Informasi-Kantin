<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Informasi Kantin</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
           

            <div class="row">
              <div class="col-lg-3" style="background-color: #4e73df"></div>

              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Kantin</h1>

                    <div><img src="img/del.png" width="150px"></div>
                    <div>Institut Teknologi Del</div>
                  </div>
                  <div style="margin-top: 20px"></div>
                  <div></div>
                  
                  <?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<div align='center'>
  <form action="prosesdaftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Nama</td><td> : <input name="nama" type="text"></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
                     
                   
                    
                 
                  

                  <?php

if (isset($_POST['submit'])) {

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$asrama = $_POST['asrama'];
$prodi = $_POST['prodi'];
$role = $_POST['role'];
include_once ("config.php");

$result = mysqli_query($mysqli, "INSERT INTO user(nim,nama,username,password,asrama,prodi,role) 
	VALUES('$nim','$nama','$username','$password','$asrama', '$prodi','$role')"
);

} 

?>
                
                
                </div>
              </div>
               <div class="col-lg-3" style="background-color: #4e73df"></div>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
