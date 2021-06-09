<?php

    require_once('koneksi.php');
    $respons = array();
        $sql = "SELECT nama_lengkap, tgl_lahir, id_user FROM tb_user where  tipe = 'Pasien'";
        $data = array();
        $query = mysqli_query($konnek,$sql);
        while ($baris = mysqli_fetch_assoc($query) ) {
            $data[] = $baris;
        }
            if(!isset($query)>0){
                
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'tipe'=>''));
            }else{
                
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'data'=>$data));
            }
?>