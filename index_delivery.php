<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM keranjang where konfirmasi_pengantaran = 'selesai dimasak'");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="logout.php">Logout</a>
<br>
<h2>Delivery</h2>
<a href="sedang_diantar.php">sedang diantar</a>
<br>




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
        echo "<td><a href='antar.php?id=$user_data[id_pemesanan]'>antar</a> || <a href='delete.php?id=$user_data[id_pemesanan]'>tolak</a></td>";
    echo "</tr>";
        // echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
        // echo "<td><a href='pesan.php?id=$user_data[id]'>pesan</a></tr>";        
    }
    ?>
    </table>

    
</body>
</html>