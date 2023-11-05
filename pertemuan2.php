<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "db_kelas_c";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if($koneksi){
    echo "Koneksi Berhasil";
} else {
    echo "Koneksi Gagal";
}


$query  = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);
$data   = mysqli_fetch_assoc($result);
// var_dump($result);

foreach ($data as $mahasiswa) {
    echo " <hr> ";
    var_dump($mahasiswa);
    echo $mahasiswa;
}

?>