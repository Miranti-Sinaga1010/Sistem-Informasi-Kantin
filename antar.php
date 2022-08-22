<?php
// include database connection file
// echo "del";

if (isset($_GET['id']) && $_GET['id'] !== '') {
  include_once("koneksi.php");
  // echo "del";

  // Get id from URL to delete that user
$id = $_GET['id'];
echo $id;

$result = mysqli_query($mysqli, "UPDATE keranjang set konfirmasi = 'selesai dimasak', konfirmasi_pengantaran = 'sedang diantar' WHERE id_pemesanan = $id");
header("Location:index_delivery.php");
}







// Delete user row from table based on given id


// After delete redirect to Home, so that latest user list will be displayed.
// header("Location:keranjang_user.php");
?>
