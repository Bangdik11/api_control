<?php

    require_once('koneksi.php');
    echo "asda";
    $respons = array();
    $id_user = $_POST['id_user'];
        $sql = "SELECT DISTINCT id_user, tanggal  FROM tb_makanan where  id_user = '$id_user'";
        $data = array();
        $query = mysqli_query($konnek,$sql);
        while ($baris = mysqli_fetch_assoc($query) ) {
             $sqlKomentar = "SELECT * FROM tb_komentar where lihat = 0 and id_pasien = $id_user and tanggal = '$baris['tanggal']";
            
             $queryKomentar = mysqli_query($konnek,$sqlKomentar);
            
             if($queryKomentar->num_rows>0){
                 $baris = array_merge($baris,array("lihat"=>0));
             }else{
                 $baris = array_merge($baris,array("lihat"=>1));
             }
            $data[] = $baris;
        }
        print_r $data;
            if(!isset($query)>0){
                
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'tipe'=>''));
            }else{
                
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'data'=>$data));
            }
?>