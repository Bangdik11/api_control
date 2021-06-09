<?php

	require_once('koneksi.php');
	$response = array();
	$user = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tgl = date("Y-m-d");
	//$username =$_POST['username'];

	$sql = "INSERT INTO tb_user (username,email,password,nama_lengkap,tgl_lahir) values ('$user','$email','$pass','$nama_lengkap','$tgl')";
                if(mysqli_query($konnek,$sql)){
                    $response["value"] = 1;
                    $response["message"] = "berhasil diinput";
                    echo json_encode($response);
                }else{
                    $response["value"] = 0;
                    $response["message"] = "oops! username sudah ada!";
                    echo json_encode($response);
                }
	?>
