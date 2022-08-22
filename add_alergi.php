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
        <a class="nav-link" href="indexm.php">
          <i class="fas fa-home"></i>
            <span>Beranda</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="Pengumumanm.php">
          <i class="fas fa-bullhorn"></i>
          <span>Pengumuman</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="informasim.php">
          <i class="fas fa-flask"></i>
          <span>Informasi Makanan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Alergi.php">
          <i class="fas fa-flask"></i>
          <span> Alergi</span></a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php

                include 'koneksi.php';
                 echo $_SESSION['nama'];  
                 ?></span>
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

  <h3 style="margin-left: 30px">Request Alergi Menu</h3>
  <hr>
<br>
  <form method="post" action="add_alergi.php" enctype="multipart/form-data" style="margin-left: 100px">
    <div class="row">
            
            <div class="col-xl-3 mb-4">Nama Menu</div>
            <div class="col-xl-1"></div>
            <div class="col-xl-8 mb-4"><input type="text" name="menu" style="width: 500px";></div>  
        

            <div class="col-xl-3 mb-4">Nama Mahasiswa</div>
            <div class="col-xl-1"></div>
            <div class="col-xl-8 mb-4"><input type="text" name="nama" style="width: 500px;"></div>



            <div class="col-xl-3 mb-4">Tempat Makan</div>
            <div class="col-xl-1"></div>
            <div class="col-xl-8 mb-4"><input type="text" name="tempatmakan" style="width : 500px;"></div>

            <div class="col-xl-3 mb-4">Kartu Alergi</div>
            <div class="col-xl-1"></div>
            <div class="col-xl-8 mb-4"><input type="file" name="alergicard" style="width : 500px;"></div>

           
           <div class="col-xl-9"></div>
          
            <div class="col-xl-2"><input type="Submit" name="Submit" style="background-color: #60A0B2; color: white;" value="Tambah"></div>



        </div>
 

  
 
  </form>


    <?php

    // Check If form submitted, insert form data into jlhmhs table.
    if(isset($_POST['Submit'])) {
      $menu = $_POST['menu'];
      $nama = $_POST['nama'];
      $tempatmakan = $_POST['tempatmakan'];
      $alergicard = $_FILES['alergicard']['name'];
      $tmp = $_FILES['alergicard']['tmp_name'];
      $fotobaru = $alergicard;
      $path = "images/".$fotobaru;

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table

        if(move_uploaded_file($tmp, $path)){
       $sql = $pdo->prepare("INSERT INTO alergimenu(menu, nama, tempatmakan, alergicard) VALUES('$menu','$nama','$tempatmakan','$alergicard')");

        $sql->bindParam(':menu',$menu);
        $sql->bindParam(':nama',$nama);
        $sql->bindParam(':tempatmakan',$tempatmakan);
        $sql->bindParam(':alergicard',$alergicard);
          $sql-> execute();

        // Show message when user added
        echo "berhasil di tambahkan<a href='alergi.php'>Lihat daftar nya</a>";
      }
    }
    ?>
  <!-- Footer -->
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
          <a class="btn btn-primary" href="logout.php">Keluar</a>
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


