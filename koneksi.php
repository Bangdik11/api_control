<?php

    $host = 'localhost';
    // $root = 'root';
    // $pass = '';
    $root = 'fajrul';
    $pass = 'fajrul';
    $db   = 'control_pasien';

    $konnek =  mysqli_connect($host,$root,$pass,$db);

        if(!$konnek){
            echo "gagal";
        }
?>