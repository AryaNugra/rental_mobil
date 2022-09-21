<?php
require "dbConnect.php";

//query
function query($query){
    global $connect;
    $result = mysqli_query($connect,$query);
    
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    if(isset($rows)){
        return $rows;
    }else{
        return false;
    }
}

//Tambah register

function AddRegister($data){
    global $connect;
    $user = htmlspecialchars($data['username']);  
    $pass = htmlspecialchars($data['password']);
    $query = "INSERT INTO user (id_user,username,password) VALUES (0,'$user','$pass')";
    mysqli_query($connect,$query);
    
    return mysqli_affected_rows($connect);
}









?>