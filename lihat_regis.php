<?php

    require_once('koneksi.php');
    $respons = array();
        //$id = $_POST['id'];
    $sql = "SELECT * FROM tb_user ";
    $query = mysqli_query($konnek,$sql);
        while($row = mysqli_fetch_array($query)){
                array_push($respons,array('id_user'=>$row['id_user'],'username' => 
                $row['username'], 'email' => $row['email']
                , 'password' => $row['password'], 'nama_lengkap' => $row['nama_lengkap'], 'tgl_lahir' => 
                $row['tgl_lahir']));
        }
        echo json_encode(array('value' => 1, 'response' => $respons));

?>