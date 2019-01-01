<?php
    include 'admin/include/config.php';

    $id_file = $_GET['id'];
    $link_file = $_GET['link'];

    $r = $con->query("SELECT * FROM `file` WHERE id_file = '$id_file'");
    foreach ($r as $rr) {
          $download_hit = $rr['download_hit'];
    }
    $download_hit_update = $download_hit + 1;
    $con->query("UPDATE `file` SET download_hit='$download_hit_update' WHERE id_file='$id_file'");

    if ($con->affected_rows > 0){
        echo "<script>window.location='admin/$link_file'</script>";
    }else{
        echo "<script>alert('File Gagal di download');window.location='index'</script>";
    }
?>