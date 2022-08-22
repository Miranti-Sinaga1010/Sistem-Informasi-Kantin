<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $tanggal=$_POST['tanggal'];
    $waktu=$_POST['waktu'];
    $kb=$_POST['kb'];
    $kl=$_POST['kl'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE jlhmhs SET tanggal='$tanggal',waktu='$waktu',kb='$kb',kl='$kl'  WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: jumlahmahasiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM jlhmhs WHERE id=$id");

while($jlhmhs_data = mysqli_fetch_array($result))
{
    $tanggal = $jlhmhs_data['tanggal'];
    $waktu = $jlhmhs_data['waktu'];
    $kb = $jlhmhs_data['kb'];
    $kl = $jlhmhs_data['kl'];
}
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

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexmahasiswa.php">
        <div class="sidebar-brand-icon ">
          <img src="img/del.png" width="50px">
        </div>
        <div class="sidebar-brand-text mx-3"></h7></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

  <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="indexa.php">
          <i class="fas fa-home"></i>
            <span>Beranda</span></a>
      </li>


       <li class="nav-item">
        <a class="nav-link" href="jumlahmahasiswa.php">
          <i class="fas fa-users"></i>
          <span>Mahasiswa</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Pengumumana.php">
          <i class="fas fa-bullhorn"></i>
          <span>Pengumuman</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="informasia.php">
          <i class="fas fa-flask"></i>
          <span>Informasi Makanan</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         <ul><h3 style="margin-top: 20px;">Sistem Informasi Kantin</h3></ul>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Keasramaan</span>
                <img class="img-profile rounded-circle" src="img/exsa.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
    <a href="jumlahmahasiswa.php">Daftar Jumlah Mahasiswa yang akan Makan</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td colspan="5">Tanggal</td>
                 <td>:</td>
                <td colspan="6"><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr> 
                <td colspan="5">Waktu</td>
                <td>:</td>
                <td colspan="6"><?php
        if($jlhmhs_data['waktu'] == "Pagi"){
          echo "<input type='radio' name='waktu' value='pagi' checked='checked'>Pagi";
          echo "<input type='radio' name='waktu' value='siang'> Siang";
          echo "<input type='radio' name='waktu' value='malam'> Malam";

        }elseif ($jlhmhs_data['waktu'] == "Siang") {
         echo "<input type='radio' name='waktu' value='pagi' > Pagi";
          echo "<input type='radio' name='waktu' value='siang'checked='checked'>Siang";
           echo "<input type='radio' name='waktu' value='malam'> Malam";

        }
          else{
           echo "<input type='radio' name='waktu' value='pagi' > Pagi";
          echo "<input type='radio' name='waktu' value='siang'> Siang";
           echo "<input type='radio' name='waktu' value='malam'checked='checked'>Malam";
        }?></td>
            </tr>
            <tr> 
                <td colspan="5">Kantin Baru</td>
                 <td>:</td>
                <td colspan="6"><input type="text" name="kb" value=<?php echo $kb;?>></td>
            </tr>
            <tr> 
                <td colspan="5">Kantin Lama</td>
                <td>:</td>
                <td colspan="6"><input type="text" name="kl" value=<?php echo $kl;?>></td>
            </tr>
            <tr>
              <td colspan="5"></td>
                <td colspan="6"><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Ubah"></td>
            </tr>
        </table>
    </form>
       <footer class="sticky-footer bg-white" style="
   
    bottom: 0px;
    width: 100%;
    position: fixed;
    height:40px;
   padding: 10px;">

          <div>
            <center><span>Sistem Informasi Kantin</span></center>
          </div>
   
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Tekan keluar jika anda ingin keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.html">Keluar</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


</body>
</html>