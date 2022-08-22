
<?php

  session_start();
  include 'koneksi.php';
  

  $username = $_POST['username'];
  $pass = $_POST['password'];
  
  $query = $ab->prepare("SELECT * FROM user WHERE username = ?");
  $query->execute(array($username));
  $hasil = $query->fetch();
  $db = new koneksiDB();
  $login = $db->cekLogin($_POST['username'], $_POST['password']);
if ($query->rowCount() == 0) {
  echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
} else {
  if ($pass <> $hasil['password']) {
    echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
  } else {
    if($login){
  if ($db->get_status() == "Reguler") { 
    header('location:index_user.php');
  }else if($db->get_status() == "chef"){
    header('location:index_chef.php');
  }else if ($db->get_status() == "kasir") {
  header('location:index_kasir.php');
  }else if($db->get_status() == "Delivery"){
  header('location:index_delivery.php');
  }else if($db->get_status() == "admin"){
  header('location:index_admin.php');
  }


}
else{
  header('location:login.php');

}
  }
}


  ?>

  <!-- <?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $db->prepare("SELECT * FROM user WHERE username = ?");
   $query->execute(array($username));
   $hasil = $query->fetch();
   if($query->rowCount() == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] == $hasil['username'];
       header('location:index.php');
     }
   }
?> -->