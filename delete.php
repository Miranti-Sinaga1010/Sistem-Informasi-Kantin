<?php
if (isset($_GET['id']) && $_GET['id'] !== '') {
  include_once("koneksi.php");
  echo "del";

  // Get id from URL to delete that user
$id = $_GET['id'];
echo $id;

$result = mysqli_query($mysqli, "update keranjang set konfirmasi = 'ditolak karena bahan makanan tidak ada' where id_pemesanan = $id");

// $result = mysqli_query($mysqli, "DELETE FROM keranjang WHERE id_pemesanan=$id");
header("Location:keranjang_user.php");
}




?>


