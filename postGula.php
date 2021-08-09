<?php

    require_once('koneksi.php');
        $id_pasien = $_POST['id_pasien'];
        $gula  = $_POST['gula'];
        $berat  = $_POST['berat'];
        $tgl = $_POST['tgl'];
        // echo json_encode(array('value'=>1, 'pesan'=> $makanan));
        //makanan
       
       
        $sql = "INSERT INTO tb_gula (id_pasien, gula, berat, tgl)

        VALUES
                ($id_pasien,'$gula','$berat','$tgl')";
        $query=mysqli_query($konnek,$sql);
                //aktivitas
    if(!$query)
        echo json_encode(array('value'=>0, 'pesan'=> mysqli_error($konnek)));
    else
    echo json_encode(array('value'=>1, 'pesan'=> "berhasil input data"));
?>