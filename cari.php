 
<?php
 require_once('koneksi.php');
if($_SERVER['REQUEST_METHOD']=='POST') {
  $search = $_POST['search'];
  $sql = "SELECT * FROM tb_user where username LIKE '%$search%' ORDER BY username ASC";
  $res = mysqli_query($konnek,$sql);
  $result = array();
  while($row = mysqli_fetch_array($res)){
    array_push($result, array('id_user'=>$row['id_user'], 'username'=>$row['username'], 'email'=>$row['email'], 'password'=>$row['password'], 'nama_lengkap'=>$row['nama_lengkap'], 'tgl_lahir'=>$row['tgl_lahir']));
  }
  echo json_encode(array("value"=>1,"response1"=>$result));
  mysqli_close($konnek);
}