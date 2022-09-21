<?php
require "dbConnect.php";
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($connect,"SELECT * FROM user WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($login) == 1){
    $query = mysqli_fetch_array($login);
    $_SESSION['hak_akses'] = $query['hak_akses'];
    header('location:index.php');
}else{
    header('location:login.php?pesan=error');
}

?>