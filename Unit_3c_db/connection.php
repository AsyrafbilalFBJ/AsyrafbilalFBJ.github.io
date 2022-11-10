<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "unit_3c";

$connection = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$connection)
{
  echo "Koneksi ke database gagal : " . mysqli_connect_error();
}
?>