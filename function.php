<?php
$servername = "localhost";
$username ="root";
$password ="";

// koneks Database
$koneksi = mysqli_connect($servername, $username, $password);

if (!$koneksi)
{
    echo "<br>koneksi Database Gagal";
    die;
}

$query = "CREATE database db_05_01";
error_reporting (o);
if (mysqli_query ($koneksi, $query)){
    echo "Buat Database Berhasil";
}else{
    echo "Buat Database Gagal". mysqli_error($koneksi);
}

echo "<br>koneksi berhasil";
?>