
<?php
// include database connection file
// echo "del";

if (isset($_GET['id']) && $_GET['id'] !== '') {
  include_once("koneksi.php");
  // echo "del";

  // Get id from URL to delete that user
$id = $_GET['id'];
echo $id;

$result = mysqli_query($mysqli, "UPDATE keranjang set konfirmasi = 'Sedang dimasak' where id_pemesanan = $id");
header("Location:index_chef.php");
}







// Delete user row from table based on given id


// After delete redirect to Home, so that latest user list will be displayed.
// header("Location:keranjang_user.php");
?>




<!-- <?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id=$_POST['id'];
    $menu=$_POST['menu'];
    $isi_menu=$_POST['isi_menu'];
    $foto=$_POST['foto'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE mentoz SET menu='$menu',isi_menu='$isi_menu',foto='$foto' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM keranjang WHERE id_pemesanan=$id");

// while($user_data = mysqli_fetch_array($result))
// {
//     $menu = $user_data['menu'];
//     $isi_menu = $user_data['isi_menu'];
//     $foto = $user_data['foto'];
// }
?>

<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table  border=1 width="80%">

    <tr>
        <th>Menu</th>  
        <th>jumlah</th> 
        <th>ukuran</th>
        <th>nama pemesan</th>
        <th>konfirmasi</th>
        <th>alamat</th>
        <th width="30%">opsi</th>

    </tr>

    <?php  
    $no = 1;
 
            if(isset($_GET['tanggal'])){
                $tgl = $_GET['tanggal'];
                $sql = mysqli_query($mysqli,"select * from mentoz where tanggal='$tgl'");
            }else{
                $sql = mysqli_query($mysqli,"select * from mentoz");
            }
            
            while($user_data = mysqli_fetch_array($result)){
         
    echo "<tr>";

        echo "<td>".$user_data['menu']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";
        echo "<td>".$user_data['ukuran']."</td>";
        echo "<td>".$user_data['nama_pemesan']."</td>";
        echo "<td>".$user_data['konfirmasi']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td><a href='terima.php?id=$user_data[id_pemesanan]'>terima</a> || <a href='delete.php?id=$user_data[id_pemesanan]'>tolak</a></td>";
    echo "</tr>";
        // echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
        // echo "<td><a href='pesan.php?id=$user_data[id]'>pesan</a></tr>";        
    }
    ?>
    </table>
    </form>
</body>
</html>

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

    // update user data
    $result = mysqli_query($mysqli, "INSERT INTO keranjang (menu,isi_menu,jumlah,ukuran,nama_pemesan,konfirmasi,alamat) 
        VALUES ('$menu','$isi_menu','$jumlah','$ukuran','$nama_pemesan','$konfirmasi','$alamat')");

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
    <a href="index_chef.php">Batal</a>
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
            </tr> 
            <tr>
                <td>Alamat</td>
                <input type="text" hidden name="konfirmasi" value="belum dipesan">
                <td><input type="text" name="alamat" ></td>
            </tr>            
            <tr>
                <td><input type="submit" name="update" value="Masukkan ke keranjang belanja"></td>
            </tr>
        </table>
    </form>
</body>
</html> -->