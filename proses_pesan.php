<?php
include "koneksi.php";

    // Check If form submitted, insert form data into users table.
    
        
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
        // $foto = $_FILES['foto']['menu']; 
        // $tmp = $_FILES['foto']['tmp_name'];

        // Rename nama fotonya
        // $fotobaru = date('dmYHis').$foto;

        // alamat foto
        // $path = "images/".$fotobaru;

        // if(move_uploaded_file($tmp, $path)){
            $sql =  $pdo -> prepare ("INSERT into mentoz (menu,isi_menu)VALUES
                (:menu,:isi_menu)");
                $sql->bindParam(':menu',$menu);
                $sql->bindParam(':isi_menu',$isi_menu);
                // $sql->bindParam(':tanggal',$tanggal);
                // $sql->bindParam(':foto',$fotobaru);
                $sql->execute();

                if ($sql) {
                    header("location: index.php");
                }else{
                    echo "terjadi kesalahan";
                }
        // } else {
        //     echo"gambar gagal upload";
        // }



        // include database connection file
        include_once("config.php");

        // Insert user data into table
        // $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    

?>