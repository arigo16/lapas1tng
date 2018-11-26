<?php
    include '../include/config.php';

    $id_napi = $_GET['id_napi'];
    $db = $con->query("DELETE FROM napi WHERE id_napi='$id_napi'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Napi telah berhasil dihapus');window.location='../index.php?page=napi'</script>";
    }else{
        echo "<script>alert('Napi telah gagal dihapus');window.location='../index.php?page=napi'</script>";
    }
?>