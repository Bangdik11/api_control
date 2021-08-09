<?php

    require_once('koneksi.php');
    $respons = array();
        $sql = "SELECT nama_lengkap, tgl_lahir, id_user FROM tb_user where  tipe = 'Pasien'";
        
        $data = array();
        $query = mysqli_query($konnek,$sql);
        
        while ($baris = mysqli_fetch_assoc($query) ) {
            
            // print_r($baris['id_user']);
            $sqlAktivitas = "SELECT * FROM tb_aktivitas where lihat = 0 and id_user = $baris[id_user]";
            $sqlMakanan = "SELECT * FROM tb_makanan where  lihat = 0 and id_user=$baris[id_user]";
            $queryAktivitas = mysqli_query($konnek,$sqlAktivitas);
            $queryMakanan = mysqli_query($konnek,$sqlMakanan);
            if($queryAktivitas->num_rows>0 || $queryMakanan->num_rows>0){
                $baris = array_merge($baris,array("lihat"=>0));
            }else{
                $baris = array_merge($baris,array("lihat"=>1));
            }
            // $baris[lihat]=0;
            // print_r($baris);
            // print_r($queryMakanan);
            // print_r($queryAktivitas);
            
            $data[] = $baris;
            // echo "<br>"
        }
            if(!isset($query)>0){
                
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'tipe'=>''));
            }else{
                
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'data'=>$data));
            }
?>