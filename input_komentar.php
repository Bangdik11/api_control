<?php
    require_once('koneksi.php');
    $respons  = array();
    $komen = $_POST['komen'];
    $id_dokter = $_POST['id_dokter'];
    $id_pasien = $_POST['id_pasien'];
    $tgl_komen = $_POST['tgl_komen'];
    $tgl_keluhan = $_POST['tgl_keluhan'];
   // $aktivitas = $_POST['isi_aktivitas'];


    $sql = "INSERT INTO tb_komentar (id_dokter, id_pasien, komen, tgl_komen, tgl_keluhan)

        VALUES
                ('$id_dokter', '$id_pasien', '$komen','$tgl_komen', '$tgl_keluhan')";

    $query = mysqli_query($konnek, $sql);
    if (!$query) {

        echo json_encode(array('value'=>0, 'pesan'=> 'data tidak ada'));

    }else{
        echo json_encode(array('value'=>1, 'pesan'=> 'ada data'));
    }             
   

?>