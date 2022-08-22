<?php

  session_start();
  include 'koneksi.php';
  $db = new koneksiDB();

  $login = $db->cekLogin($_POST['nama'], $_POST['password']);

if($login){
  if ($db->get_status() == "mahasiswa") { 
    header('location:indexm.php');
  }else if($db->get_status() == "chef"){
    header('location:indexc.php');
  }else if ($db->get_status() == "keasramaan") {
  header('location:indexa.php');
  }else if($db->get_status() == "staff"){
  header('location:indexs.php');
  }


}
else{
  header('location:login.php');

}
  ?>