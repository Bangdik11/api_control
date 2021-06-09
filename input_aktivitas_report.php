<?php
    require_once('koneksi.php');
    $respons  = array();
    $nasi      = $_POST['nasi_merah'];
    $roti      = $_POST['roti_gandung'];
    $pepaya    = $_POST['pepaya'];
    $oat       = $_POST['oat'];
    $jeruk     = $_POST['jeruk'];
    $apel      = $_POST['apel'];
    $brokoli   = $_POST['brokoli'];
    $bayam     = $_POST['bayam'];
    $kubis     = $_POST['kubis'];
    $sawi      = $_POST['sawi'];
    $kacangM   = $_POST['kacang_mete'];
    $kacangT   = $_POST['kacang_tanah'];
    $susu      = $_POST['susu_rendah_lemak'];
    $youghurt  = $_POST['youghurt_rendah_lemak'];
    $minyak    = $_POST['minyak_zaitun'];
    $ikanS     = $_POST['ikan_salmon_panggang'];
    $ikanT     = $_POST['ikan_tuna_panggang'];
    $bunga     = $_POST['bunga_matahari'];
    $jlnkaki   = $_POST['jalan_kaki_1x_seminngu'];
    $lari      = $_POST['lari_30scn_5x_seminggu'];
    $jlncepat  = $_POST['jalan_cepat30scn_1x_seminggu'];
    $senam     = $_POST['senam_30scn_5x_seminggu'];
    $sepeda    = $_POST['bersepeda_1x_seminggu'];
    $taichi    = $_POST['taichi_30scn_5x_seminggu'];
    $yoga      = $_POST['yoga_30scn_5x_seminggu'];


    $sql = "INSERT INTO tb_input_activitas_report (nasi_merah, roti_gandung, pepaya, oat, jeruk, apel, brokoli, bayam, kubis, sawi,    kacang_mete, kacang_tanah, susu_rendah_lemak, minyak_zaitun, ikan_salmon_panggang, ikan_tuna_panggang, bunga_matahari, jalan_kaki_1x_seminngu, lari_30scn_5x_seminggu, jalan_cepat30scn_1x_seminggu, senam_30scn_5x_seminggu, bersepeda_1x_seminggu, taichi_30scn_5x_seminggu, yoga_30scn_5x_seminggu)

        VALUES
                ('$nasi','$roti','$pepaya',' $oat','$jeruk','$apel','$brokoli','$bayam','$kubis',' $sawi','$kacangM','$kacangT','$susu','$youghurt','$minyak','$ikanS','$ikanT','$bunga','$jlnkaki','$lari','$jlncepat','$senam','$sepeda','$taichi',     '$yoga')";

    $query = mysqli_query($konnek, $sql);
    if (!isset($query)>0) {

        echo json_encode(array('value'=>0, 'pesan'=> 'data tidak ada'));

    }else{
        echo json_encode(array('value'=>1, 'pesan'=> 'ada data'));
    }             
   

?>