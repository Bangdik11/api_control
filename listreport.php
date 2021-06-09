<?php

    require_once('koneksi.php');
    $respons = array();
    $id_user = $_POST['id_user'];
        $sql = "SELECT DISTINCT id_user, tanggal  FROM tb_makanan where  id_user = '$id_user'";
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