<?php

    require_once('koneksi.php');
        $id_user = $_POST['id_user'];
        $waktu  = $_POST['dataWaktu'];
        $tgl = $_POST['sTgl'];
        $makanan =  $_POST['dataMakanan'];
        $aktivitas =  $_POST['dataAktivitas'];
        // echo json_encode(array('value'=>1, 'pesan'=> $makanan));
        //makanan
        $data="";
        $koma=true;
        foreach ($makanan as $key => $value) {
            if (!$koma) {
                $data=$data.",";
            }else{
                $koma=false;
            }
            $data=$data."('$id_user','$waktu','$value','$tgl',0)";
        }
       
       
        $sql = "INSERT INTO tb_makanan (id_user, waktu, makanan, tanggal,lihat)

        VALUES
                $data";
                $query=mysqli_query($konnek,$sql);
                //aktivitas
        $data2="";
        $koma=true;
        foreach ($aktivitas as $key => $value2) {
            if (!$koma) {
                $data2=$data2.",";
            }else{
                $koma=false;
            }
            $data2=$data2."('$id_user','$waktu','$value2','$tgl',0)";
        }
       
       
        $sql = "INSERT INTO tb_aktivitas (id_user, waktu, aktivitas, tanggal,lihat)

        VALUES
                $data2";
                if(mysqli_query($konnek,$sql)){
                    $response["value"] = 1;
                    $response["pesan"] = "berhasil diinput";
                    echo json_encode($response);
                }else{
                    $response["value"] = 0;
                    // $response["pesan"] = mysqli_error($konnek);
                    $response["pesan"] = $sql;
                    echo json_encode($response);
                }
        
?>