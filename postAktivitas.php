<?php

    require_once('koneksi.php');
        $id_user = $_POST['id_user'];
        $waktu  = $_POST['waktu'];
        $tgl = $_POST['tanggal'];
        $aktivitas =  $_POST['dataAktivitas'];
        // echo json_encode(array('value'=>1, 'pesan'=> $makanan));
        $data="";
        $koma=true;
        foreach ($aktivitas as $key => $value) {
            if (!$koma) {
                $data=$data.",";
            }else{
                $koma=false;
            }
            $data=$data."('$id_user','$waktu','$value','$tgl')";
        }
       
       
        $sql = "INSERT INTO tb_aktivitas (id_user, waktu, aktivitas, tanggal)

        VALUES
                $data";
                if(mysqli_query($konnek,$sql)){
                    $response["value"] = 1;
                    $response["pesan"] = "berhasil diinput";
                    echo json_encode($response);
                }else{
                    $response["value"] = 0;
                    $response["pesan"] = "oops! username sudah ada!";
                    echo json_encode($response);
                }
        
?>