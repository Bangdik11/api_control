<?php

    require_once('koneksi.php');
    // echo "asda";
    $respons = array();
    $id_user = $_POST['id_user'];
        $sql = "SELECT DISTINCT id_user, tanggal  FROM tb_makanan where  id_user = '$id_user'";
        $data = array();
        $query = mysqli_query($konnek,$sql);
        while ($baris = mysqli_fetch_assoc($query) ) {
             $sqlKomentar = "SELECT * FROM tb_komentar where id_pasien = $id_user and tgl_keluhan = '$baris[tanggal]'";
            // echo $baris[tanggal];
             $queryKomentar = mysqli_query($konnek,$sqlKomentar);
            //  echo mysqli_fetch_assoc($queryKomentar);
            // echo mysqli_error($konnek);
             while ($bariss = mysqli_fetch_assoc($queryKomentar) ) {
                
                // if($queryKomentar->num_rows>0){
                     echo $bariss;
                    $baris = array_merge($baris,array("lihat"=>$bariss["lihat"]));
                // }else{
                //     $baris = array_merge($baris,array("lihat"=>1));
                // }
           }
            
            $data[] = $baris;
        }
        // print_r $data;
            if(!isset($query)>0){
                
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'tipe'=>''));
            }else{
                
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'data'=>$data));
            }
?>