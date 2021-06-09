<?php

    
    require_once('koneksi.php');
    $deskripsi = $_POST['deskripsi'];
    $input = $_POST['input'];
    
           // $nama_folder    = './gambar/';
            // $file_name      = "img".rand(9,9999)."jpg"; 
           // $file_name = $_FILES['imageupload']['name'];
          //  $alat           = $_FILES['imageupload']['tmp_name'];
               // move_uploaded_file($alat,$nama_folder.$file_name);

        $sql = "SELECT * FROM tb_user where username = '$username'";
    $query = mysqli_fetch_array(mysqli_query($konnek,$sql));
        if(isset($query)){
            $response["value"] = 0;
            $response["message"] = "Data sudah ada";
            echo json_encode($response);
        }else{
            $sql = "INSERT INTO tb_user (username,email,password,Confirm_password) values ('$username','$email','$password','$Confirm_password')";
                if(mysqli_query($konnek,$sql)){
                    $response["value"] = 1;
                    $response["message"] = "berhasil diinput";
                    echo json_encode($response);
                }else{
                    $response["value"] = 0;
                    $response["message"] = "oops! username sudah ada!";
                    echo json_encode($response);
                }
        }

?>