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

      <li class="nav-item ">
        <a class="nav-link" href="indexs.php">
          <i class="fas fa-home"></i>
          	<span>Beranda</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="reseps.php">
          <i class="fas fa-flask"></i>
          <span>Lihat Resep Makanan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="bahan.php">
          <i class="fas fa-list"></i>
          <span>Stock Bahan Makanan</span></a>
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>
          <div class="row">
          <div class="col-xl-5"> 
              <h5> <?php echo date ("l, Y-m-d") . "<br>"; ?> </h5>
          </div>
          <div class="col-xl-2"></div>
          <!-- <div class="col-xl-5">
              <h6><i class="fas fa-bullhorn"></i> Pengumuman</h6>
          </div> -->
          </div>


          <hr/>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-12">
            <p><center><h1>Rendang</h1></center></p>
            <p><center><img src="img/rendang.png"></center></p>
            <p><b>Bahan:</b></p>
            <p><ul>
              <li>500 gr dagingi</li>
              <li>11 batang serai geprek</li>
              <li>3 lembar daun jeruk</li>
              <li>2 lembar daun salam</li>
              <li>1 ruas lengkuas geprek</li>
              <li>2 cm kayu manis</li>
              <li>1 sdt gula merah</li>
              <li>1 sdt kaldu sapi dan garam</li>
              <li>1/2 sdt jintan bubuk</li>
              <li>1/2 sdt merica bubuk</li>
              <li>Jeruk nipis</li>
              <li>500 ml santan dari 1/2 kelapa</li>
              </ul>
              <p><b>Bumbu Halus:</b></p>
              <p><ul>
                <li>4 siung bawang putih</li>
                <li>6 butir bawang merah</li>
                <li>2 butir kemiri</li>
                <li>1/2 sdt ketumbar</li>
                <li>3 cabai merah besar (buang bijinya)</li>
                <li>2 cm kunyit</li>
                <li>3 cm jahe</li>

              </ul></p>
            </p>
            </div>

            <div class="col-xl-12">
            <p><center><h1>Asam Manis</h1></center></p>
            <p><center><img src="img/asammanis.png"></center></p>
            <p><b>Bahan-Bahan</b></p>
            <p><ul>
              <li>1 ekor ikan mujair (berat sekitar 250 gr)</li>
              <li>2 siung bawang putih </li>
              <li>3 sdt garam </li>
              <li>Air secukupnya</li>
              <li>3 sdm margarin</li>
              <li>1 siung bawang putih, cincang halus</li>
              <li>2 siung bawang merah, cincang halus</li>
              <li>1 buah cabai merah, potong serong tipis</li>
              <li>5 sdm saus tomat</li>
              <li>3 sdm saus pedas manis</li>
              <li>1 sdm saus tiram</li>
              <li>Garam, secukupnya</li>
              <li>Gula, secukupnya</li>
              <li>Lada bubuk, secukupnya</li>
              </ul>
            </p>
            </div>

            <div class="col-xl-12">
            <p><center><h1>Ayam Kari</h1></center></p>
            <p><center><img src="img/ayamkari.png"></center></p>
            <p><b>Bahan-Bahan</b></p>
            <p><ul>
              <li>1 Kg daging Ayam</li>
              <li>1/2 sdt air jeruk nipis</li>
              <li>4 sdm Kecap Manis</li>
              <li>3/4 sdt garam</li>
              <li>3/4 sdt merica bubuk</li>
              <li>1,5 L air</li>
              <li>5 lembar daun jeruk</li>
              <li>5 batang serai, memarkan</li>
              <li>jahe, ditumbuk</li>
              <li>3 buah cabai merah, iris tipis</li>
              <li>1 sdt bubuk kari</li>
              <li>1 sdt pala bubuk</li>
              <li>5 butir cengkih</li>
              </ul>
            </p>
            </div>

            <div class="col-xl-12">
            <p><center><h1>Ayam Sambal</h1></center></p>
            <p><center><img src="img/ayamsambal.png"></center></p>
            <p><b>Bahan-Bahan</b></p>
            <p><ul>
              <li>1 Kg daging Ayam</li>
              <li>secukupnya Cabe Merah </li>
              <li>4 Siung Bawang Merah </li>
              <li>1 Siung Bawang Putih </li>
              <li>Secukupnya Garam, Gula, Royco </li>
              <li>2 lbr daun salam, 1 btg sereh geprek </li>
              </ul>
            </p>
            </div>

            <div class="col-xl-12">
            <p><center><h1>Ikan Teri Sambal</h1></center></p>
            <p><center><img src="img/ikanteri.png"></center></p>
            <p><b>Bahan-Bahan</b></p>
            <p><ul>
              <li>100 gram ikan teri kering</li>
              <li>15 buah cabai rawit </li>
              <li>3 buah cabai merah besar</li>
              <li>Gula merah (secukupnya</li>
              <li>7 siung bawang merah </li>
              <li>7 siung bawang putih</li>
              <li>Garam (secukupnya) </li>
              <li>1 lembar daun jeruk </li>
              </ul>
            </p>
            </div>
          
          </div>
      <!-- End of Main Content -->
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
