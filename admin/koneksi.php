<?php

$host = "localhost";

$username = "root";

$password = "";

$database = "db_coffe";

$koneksi = mysqli_connect($host, $username, $password, $database);

 

// Periksa koneksi

if (!$koneksi) {

    die("Koneksi gagal: " . mysqli_connect_error());

}