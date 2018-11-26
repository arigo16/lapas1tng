<?php
    include '../include/config.php';

    $id_kasus = $_GET['id_kasus'];
    $db = $con->query("DELETE FROM kasus WHERE id_kasus='$id_kasus'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Kasus telah berhasil dihapus');window.location='../index.php?page=kasus'</script>";
    }else{
        echo "<script>alert('Kasus telah gagal dihapus');window.location='../index.php?page=kasus'</script>";
    }
?>