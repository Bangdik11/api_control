<?php

    require_once('koneksi.php');
    $respons = array();
    $id_user = $_POST['id_user'];
    $data_tgl = $_POST['data_tgl'];
        $sql = "SELECT * FROM tb_komentar where  id_pasien = '$id_user' and tgl_keluhan = '$data_tgl' order by id_komentar DESC limit 1";
        
        
        $query = mysqli_fetch_assoc(mysqli_query($konnek,$sql));
        $id_dokter = $query['id_dokter'];
        $sqlDokter = "SELECT * FROM tb_user where  id_user = '$id_dokter' ";
        $queryDokter = mysqli_fetch_assoc(mysqli_query($konnek,$sqlDokter));
        $sqll = "UPDATE  tb_komentar set lihat = 1 where  id_pasien = '$id_user' and tgl_keluhan = '$data_tgl' ";
        $queryl = mysqli_query($konnek,$sqll);
        // print_r($pagi);
        // print_r($pagi) ;
            if(!isset($query)>0){
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'komen'=>'', 'dokter'=>''));
            }else{
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'komen'=>$query['komen'] , 'dokter'=>$queryDokter['nama_lengkap']));
            }
?>