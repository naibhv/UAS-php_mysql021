<?php 
$host       = "localhost: 3309";
$user       = "root";
$pass       = "";
$db         = "cake";

$koneksi    = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
    die("Gagal terkoneksi");
}