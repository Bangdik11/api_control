<?php

    require_once('koneksi.php');
    $respons = array();
        $user = $_POST['username'];
        $pas  = $_POST['password'];
        $tipe = $_POST['spinner_login_data'];
        $sql = "SELECT * FROM tb_user where username = '$user' and password = '$pas' and tipe = '$tipe'";

        $query = mysqli_fetch_assoc(mysqli_query($konnek,$sql));
            if(!isset($query)>0){
                
                echo json_encode(array('value'=>0, 'pesan' =>'data tidak ada', 'tipe'=>''));
            }else{
                
                echo json_encode(array('value'=>1, 'pesan' =>'berhasil login', 'tipe'=>$tipe, 'id_user'=>$query['id_user'],'nama'=>$query['nama_lengkap']));
            }
?>