<?php

    require_once('koneksi.php');
    $respons = array();
    $id_user = $_POST['id_user'];
    $data_tgl = $_POST['data_tgl'];
        $sql = "SELECT DISTINCT aktivitas FROM tb_aktivitas where  id_user = '$id_user' and tanggal = '$data_tgl' ";
        $data=array();
        $query = mysqli_query($konnek,$sql);
        while ($baris = mysqli_fetch_assoc($query) ) {
          array_push($data , $baris['aktivitas']);  
            // print_r($baris);
            // echo $baris['makanan'];
            
        } 
    
        // $arr=mysqli_fetch_array($query);
        // print_r(mysqli_fetch_assoc($query));
        // print_r($query);
        // echo mysqli_error($konnek);
        // print_r($pagi);
        // print_r($pagi) ;
            if(!isset($query)>0){
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'data'=>$data));
            }else{
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'data'=>$data));
            }
?>