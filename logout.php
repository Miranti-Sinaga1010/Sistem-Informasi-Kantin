<?php
  session_start();
  include 'koneksi.php';
  $db = new koneksiDB();

  $db->logout();
  header("location:login.php");
?>