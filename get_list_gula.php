<?php

    require_once('koneksi.php');
    $respons = array();
    $id_pasien = $_POST['id_pasien'];
    $tgl = $_POST['tgl'];
        $sql = "SELECT * FROM tb_gula where  id_pasien = '$id_pasien' and tgl = '$tgl' ";
        $data=array();
        $query = mysqli_query($konnek,$sql);
        
        // $arr=mysqli_fetch_array($query);
        // print_r(mysqli_fetch_assoc($query));
        // print_r($query);
        // echo mysqli_error($konnek);
        // print_r($pagi);
        // print_r($pagi) ;
            if(!$query){
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'data'=>""));
            }else{
                // print_r($query);
                while ($baris = mysqli_fetch_assoc($query) ) {
                    $data[] = $baris;
                      // print_r($baris);
                    //   echo $baris['gula'];
                      
                  }
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'data'=>$data));
            }
?>