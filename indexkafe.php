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
  <link rel="stylesheet" type="text/css" href="vendorb/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fontsd/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vendorb/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendorb/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="vendorb/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="cssa/util.css">
  <link rel="stylesheet" type="text/css" href="cssa/main.css">
  <title>Kafe Del</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
        <a class="nav-link" href="pengumuman.php">
          <i class="fas fa-bullhorn"></i>
          <span>Pengumuman</span></a>
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

         
         <ul>Minuman</ul>
         <ul>Makanan</ul>
         <ul>Makanan Ringan</ul>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="" href="login.php" id="userDropdown"   aria-haspopup="true" aria-expanded="false">
                Login
                <!-- <img class="img-profile rounded-circle" src="img/exsa.jpg"> -->
              </a>
            </li>

          </ul>



        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container" style="margin :5px">

          <!-- Page Heading -->
          
          <div class="row">
          <div class="col-xl-5" style="margin-bottom: 1px"> 
              <!-- <h5> <?php echo date ("l, Y-m-d") . "<br>"; 

              ?> </h5> -->
          </div>

<!-- <div style="margin-top: 40px;margin-left: -470px">
  <h1>Kantin Baru</h1>
</div> -->
          <!-- <div class="limiter">
            <h1>Kantin Baru</h1>
            <div class="container-table100" style="margin-top: -240px">
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">Waktu</th>
                  <th class="cell100 column2">Makanan Pokok</th>
                  <th class="cell100 column3">Lauk</th>
                  <th class="cell100 column4">Info Gizi</th> -->
                  
                  <!-- <th class="cell100 column3"></th> -->
                  <!-- <th class="cell100 column5">Spots</th> -->
                <!-- </tr>
              </thead>
            </table>
          </div>

          <div class="table100-body js-pscroll">
            <table>
              <tbody>
                <tr class="row100 body"> -->
                  <!-- <?php

  include 'koneksi.php';

  // Buat query untuk menampilkan semua data siswa
  $tgl =  date("Y-m-d");
  //echo $tgl;   
  $sql = $pdo->prepare("SELECT * from kantin_baru where tanggal = CURDATE()");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    // echo "<tr>";
    //echo $data['tanggal'];
    echo "<td class='cell100 column1'>".$data['role']."</td>";
    echo "<td class='cell100 column2'>".$data['nama_menu']."</td>";
    echo "<td class='cell100 column3'>".$data['isi_menu']."</td>";
    echo "<td class='cell100 column4'>".$data['Info_gizi']."</td>";
    // echo "<td><img src='images/".$data['foto']."' width='150' height='150'></td>";
    echo "</tr>";

  }
  ?> -->
                    
                  
                                  
          <!--     </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div> -->


<!--===============================================================================================-->  
  <script src="vendorb/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendorb/bootstrap/js/popper.js"></script>
  <script src="vendorb/bootstrap/js/bootstrap.min.js"></script>
===============================================================================================
  <script src="vendorb/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendorb/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    
  </script>

  

   <!--  <div class="limiter">
  
    <h1>Kantin Lama</h1>
  
            <div class="container-table100" style="margin-top: -240px">
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">Waktu</th>
                  <th class="cell100 column2">Makanan Pokok</th>
                  <th class="cell100 column3">Lauk</th>
                  <th class="cell100 column4">Info Gizi</th>
 -->                  
                  <!-- <th class="cell100 column3"></th> -->
                  <!-- <th class="cell100 column5">Spots</th> -->
               <!--  </tr>
              </thead>
            </table>
          </div>

          <div class="table100-body js-pscroll">
            <table>
              <tbody>
                <tr class="row100 body"> -->
                 <!--  <?php

  // Buat query untuk menampilkan semua data siswa
  $tgl =  date("Y-m-d");
  //echo $tgl;   
  $sql = $pdo->prepare("SELECT * from kantin_lama where tanggal = CURDATE()");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    // echo "<tr>";
    //echo $data['tanggal'];
    echo "<td class='cell100 column1'>".$data['role']."</td>";
    echo "<td class='cell100 column2'>".$data['nama_menu']."</td>";
    echo "<td class='cell100 column3'>".$data['isi_menu']."</td>";
    echo "<td class='cell100 column4'>".$data['Info_gizi']."</td>";
    // echo "<td><img src='images/".$data['foto']."' width='150' height='150'></td>";
    echo "</tr>";

  }
  ?> -->
                    
                  
                                  
             <!--  </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div> -->
<!--===============================================================================================-->
  
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white" style="
   
    bottom: 0px;
    width: 100%;
    position: fixed;
    height:40px;
   padding: 10px;">

          <div>
            <center><span>Kafe Del</span></center>
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
