<?php
require "Fungsi.php";
require "dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="username">username</label>
    <input type="text" name="username" placeholder="username">
    <label for="password">password</label>
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="submit">Register</button>
    <?php
    if(isset($_POST['submit'])){
        if(AddRegister($_POST) > 0){
            echo "<script>
            Swal.fire('Berhasil!','Data Berhasil disimpan!','success')
                .then(()=>{window.location = 'login.php';});
            </script>";
        }else{
            echo "<script>
                Swal.fire('Error!','data tidak Berhasil disimpan!','error');
                </script>";
            echo mysqli_error($connect);
        }
    }
    ?>
</form>
</body>
</html>