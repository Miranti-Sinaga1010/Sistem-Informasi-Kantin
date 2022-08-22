<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$jadwal = $_POST['jadwal'];
$menu = $_POST['menu'];
$lauk = $_POST['lauk'];
$tanggal = $_POST['tanggal'];
$Info = $_POST['Info'];

  $sql = $pdo->prepare("INSERT INTO kantin_lama(role, nama_menu, isi_menu,Info_gizi, tanggal) VALUES('$jadwal','$menu','$lauk','$Info','$tanggal')");
  $sql->bindParam(':role', $jadwal);
  $sql->bindParam(':nama_menu', $menu);
  $sql->bindParam(':isi_menu', $lauk);
  $sql->bindParam(':Info_gizi',$Info);
  $sql->bindParam(':tanggal', $tanggal);
  $sql->execute(); // Eksekusi query insert
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: indexc.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }


?>





