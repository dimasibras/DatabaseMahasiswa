<?php
$host="localhost";
$user="root";
$password="";
$db="dimbra"; //nama database di phpmyadmin

$koneksi=mysqli_connect($host, $user, $password, $db);

if (empty($_SESSION["email"])){
    $_SESSION["alert"] = "Anda harus melakukan login terlebih dahulu!";
    header("location:login.php");
}

?>