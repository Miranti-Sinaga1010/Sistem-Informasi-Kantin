<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan ORDER BY id_pemesanan DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="logout.php">Logout</a>
<br>
<a href="add.php">Add New Menu</a><br/><br/>
<h2>Daftar dibawah adalah menu yang dipesan</h2>

    <table  border=1>

    <tr>
        <th>Menu</th>  
        <th>jumlah</th> <!-- <th>tanggal</th> <th>update</th> -->
        <th>ukuran</th>
        <th>nama pemesan</th>
        <th>konfirmasi</th>
        <th>alamat</th>
        

    </tr>
    <?php  $no = 1;
 
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
        echo "<td>".$user_data['alamat']."</td></tr>";
        // echo "<td>".$user_data['tanggal']."</td>";
        // echo "<td><img src ='images/".$user_data['foto']."'width='100' height='100'</td></tr>";
        // echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
        // echo "<td><a href='pesan.php?id=$user_data[id]'>pesan</a></tr>";        
    }
    ?>
    </table>

    
</body>
</html>