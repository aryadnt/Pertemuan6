<?php

include_once("koneksi.php");
$sql ="CREATE DATABASE Mahasiswa;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "pembuatan database sukses";

}else{
    echo "terjadi kesalahan dalam pembuatan database";
}
mysqli_close($cnn);