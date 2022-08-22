<?php
session_start();
// Create database connection using config file
include_once 'koneksi.php';

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mentoz ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>



<body>
    Nama Anda :  
    <?php

  echo $_SESSION['username'];
  
    ?>
    <br>
<a href="logout.php">Logout</a><br/><br/>    
<!-- <a href="add.php">Add New Menu</a><br/><br/> -->
<a href="keranjang_user.php">Keranjang anda</a><br><br>
    <table  border=1>

    <tr>
        <th>Menu</th>  
        <th>kelengkapan menu</th> <!-- <th>tanggal</th> <th>update</th> -->
        <th>Foto</th>
        <!-- <th>edit dan delete untuk admin</th> -->
        <th>pesan untuk pembeli</th>
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
        
        echo "<td>".$user_data['isi_menu']."</td>";
        // echo "<td>".$user_data['tanggal']."</td>";
        echo "<td><img src ='images/".$user_data['foto']."'width='100' height='100'</td>";
        // echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
        echo "<td><a href='pesan.php?id=$user_data[id]'>pesan</a></tr>";        
    }
    ?>
    </table>

    
</body>
</html>