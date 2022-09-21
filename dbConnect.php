<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'mobil_rental';

$connect = mysqli_connect($host,$username,$password) or die ("Server Error");
mysqli_select_db($connect,$db) or die ("DB error");


?>