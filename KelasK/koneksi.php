<?php
    include_once("konfigurasi.php");
    //server: localhost (127.0.0.1)
    //user: root
    //password: ''

    
    $cnn = mysqli_connect(dbSERVER, dbUSER, dbPWD, dbDATABASE,dbPORT)
    or die("Terjadi kesalahan saat koneksi ke database");
    
    /*
    //metode OOP
    $cn = new mysqli(dbSERVER, dbUSER, dbPWD);

    if($sc->connect_error){
        die("Terjadi Kesalahan saat koneksi ke database");
    }
*/
    echo "koneksi ke database sukses";