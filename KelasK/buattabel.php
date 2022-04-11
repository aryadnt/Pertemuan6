<?php
include_once("koneksi.php");
$sql = "CREATE TABLE mhs(
    NIM VARCHAR(8) PRIMARY KEY,
    NAMA VARCHAR(50),
    JURUSAN VARchar(20),
    PASCODE VARCHAR(10)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "pembuatan tabel sukses";
}else{
    echo "pembuatan tabel gagal";
}