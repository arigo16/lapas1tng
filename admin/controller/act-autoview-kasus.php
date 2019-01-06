<?php
    include ('../include/config.php');

    $nama_napi = $_GET['nama_napi'];
    $query = mysqli_query($con, "SELECT napi.id_napi, napi.nama_napi, napi.id_kasus, kasus.kasus FROM kasus INNER JOIN napi ON kasus.id_kasus = napi.id_kasus WHERE napi.nama_napi='$nama_napi'");
    $napi = mysqli_fetch_array($query);
    $data = array(
            'kasus'  =>  $napi['kasus'],);
    echo json_encode($data);
?>