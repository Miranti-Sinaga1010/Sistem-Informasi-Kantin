<?php 
  session_start();
?>
<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   

    $menu=$_POST['menu'];
    $isi_menu=$_POST['isi_menu'];
    $jumlah=$_POST['jumlah'];
    $ukuran=$_POST['ukuran'];
    $nama_pemesan=$_SESSION['username'];
    $konfirmasi=$_POST['konfirmasi'];
    $alamat=$_POST['alamat'];
    $konfirmasi_pengantaran=$_POST['konfirmasi_pengantaran'];

    // update user data
    $result = mysqli_query($mysqli, "INSERT INTO keranjang (menu,isi_menu,jumlah,ukuran,nama_pemesan,konfirmasi,alamat,konfirmasi_pengantaran) 
        VALUES ('$menu','$isi_menu','$jumlah','$ukuran','$nama_pemesan','$konfirmasi','$alamat','$konfirmasi_pengantaran')");

    // Redirect to homepage to display updated user in list
    header("Location: index_user.php");
}
?>
<?php
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mentoz WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $menu = $user_data['menu'];
    $isi_menu = $user_data['isi_menu'];
    $foto = $user_data['foto'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <?php
    echo $_SESSION['username'];  
    $gam = $_SESSION['username'];  
    ?>
    <br>
    <a href="index_user.php">Batal</a>
    <br/><br/>

    <form name="update_user" method="post" action="pesan.php" >
        <table border="0">
            <tr> 
                <td>Menu</td>
                <td><input type="text" readonly name="menu" value="<?php echo $menu;?>" ></td>
            </tr>
            <tr> 
                <td>Keterangan Menu</td>
                <td><input type="text" readonly name="isi_menu" value="<?php echo $isi_menu;?>" ></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" ></td>
            </tr>
            <tr> 
                <td>Ukuran</td>
                
                <td><input type="text" name="ukuran" ></td>
            </tr>
            <!-- <tr>
                <td>Username</td>
                <td ><input style="width: 400;height: 100;" type="text"  name="nama_pemesan" value=<?php echo $_SESSION['username'];?>></td>
            </tr> -->
            <tr>
                <td>Alamat</td>
                <input type="text" hidden name="konfirmasi" value="belum dipesan">
                <input type="text" hidden name="konfirmasi_pengantaran" value="belum dipesan">
                <td><input type="text" name="alamat" ></td>
            </tr>            
            <tr>
                <td><input type="submit" name="update" value="Masukkan ke keranjang belanja"></td>
            </tr>
        </table>
    </form>
</body>
</html>