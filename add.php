<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form method="post" action="proses_simpan.php"  name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Menu</td>
                <td><input type="text" name="menu"></td>
            </tr>
            <tr> 
                <td>isi menu</td>
                <td><input type="text" name="isi_menu"></td>
            </tr>
            <!-- <tr> 
                <td>tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr> -->
            <!-- <tr> 
                <td>foto</td>
                <td><input type="file" name="foto"></td>
            </tr> -->
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['date'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        // Show message when user added
        echo "User added successfully. <a href='index_chef.php'>View Users</a>";
    }
    ?>

    

</body>
</html>