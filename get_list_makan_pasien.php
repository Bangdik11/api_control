<?php

    require_once('koneksi.php');
    $respons = array();
    $id_user = $_POST['id_user'];
    $data_tgl = $_POST['data_tgl'];
        $sql = "SELECT * FROM tb_makanan where  id_user = '$id_user' and tanggal = '$data_tgl' ";
        $pagi=array();
        $siang=array();
        $malam=array();
        $data=array();
        $query = mysqli_query($konnek,$sql);
        while ($baris = mysqli_fetch_assoc($query) ) {
            if ($baris['waktu'] == "Pagi") {
                array_push($pagi, $baris['makanan']);
            }elseif ($baris['waktu'] == "Siang") {
                array_push($siang, $baris['makanan']);
            }elseif ($baris['waktu'] == "Malam") {
               array_push($malam, $baris['makanan']);
            }
            // print_r($baris);
            // echo $baris['makanan'];
            
        }
        if ($pagi == null) {
            $pagi[0]="";
        }
        if ($siang == null) {
            $siang[0]="";
        }
        if ($malam == null) {
            $malam[0]="";
        }
        $data['pagi']=$pagi;
        $data['siang']=$siang;
        $data['malam']=$malam;
     
        // print_r($pagi);
        // print_r($pagi) ;
            if(!isset($query)>0){
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'data'=>$data));
            }else{
                echo json_encode(array('value'=>1, 'pesan' =>'data berhasil di ambil', 'data'=>$data,'tanggal'=>$data_tgl));
            }
?>