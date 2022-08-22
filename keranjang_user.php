<?php
session_start();
// Create database connection using config file
include_once("koneksi.php");

?>

<?php

echo $_SESSION['username'];
$hank = $_SESSION['username'];
$result = mysqli_query($mysqli,'SELECT keranjang.id_pemesanan, keranjang.nama_pemesan, keranjang.menu, keranjang.isi_menu, keranjang.jumlah, 
keranjang.ukuran, keranjang.username, keranjang.konfirmasi, keranjang.alamat
FROM keranjang
INNER JOIN USER ON user.username = keranjang.nama_pemesan');

$gae = mysqli_query($mysqli,"SELECT * FROM keranjang WHERE nama_pemesan ='$hank'");

?>

<html>
<head>    
</head>

<body>
    <br>
    <a href="logout.php">logout</a>
    <br>
    <a href="index_user.php">kembali ke menu</a>
    <br>

    <form method="GET" action="pemesanan.php">
    <table  border=1>
    <tr>
        <th>Id pemesanan</th>
        <th>Menu</th>
        <th>kelengkapan menu</th>
        <!-- <th>Foto</th> -->
        <th>Jumlah</th>   
        <th>Ukuran</th>
        <th>nama pembeli</th>
        <th>Konfirmasi pemesanan</th>        
        <th>Lanjut ke pemesanan</th>
        
    </tr>
    <?php  
    
    $no = 1;
 
            if(isset($_GET['tanggal'])){
                $tgl = $_GET['tanggal'];
                $sql = mysqli_query($mysqli,"select * from mentoz where tanggal='$tgl'");
            }else{
                $sql = mysqli_query($mysqli,"select * from mentoz");
            }
            
            while($user_data = mysqli_fetch_array($gae)

        ){
         
        echo "<tr>";
        echo "<td>".$user_data['id_pemesanan']."</td>";
        echo "<td>".$user_data['menu']."</td>";
        
        echo "<td>".$user_data['isi_menu']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";
        echo "<td>".$user_data['ukuran']."</td>";
        // echo "<td>".$user_data['tanggal']."</td>";
        // echo "<td><img src ='images/".$user_data['foto']."'width='100' height='100'</td>";
        echo "<td>".$user_data['nama_pemesan']."</td>"; 
        // echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
        echo "<td>".$user_data['konfirmasi']."</td>";
        echo '<td> <a href="pemesanan.php?id='.$user_data['id_pemesanan'].'">Pesan</a> || <a href="batal_pesan.php?id='.$user_data['id_pemesanan'].'">Batalkan </a> </td></tr>';



    }
    // This is in the PHP file and sends a Javascript alert to the client
// $message = "Apakah anda ingin melanjutkan pemesanan?";
// echo "<script type='text/javascript'>alert('$message');</script>";
    
    ?>
    </table>
    </form>

    
</body>
</html>