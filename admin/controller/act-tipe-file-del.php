<?php
    include '../include/config.php';

    $id_tipe_file = $_GET['id_tipe_file'];
    $db = $con->query("DELETE FROM tipe_file WHERE id_tipe_file='$id_tipe_file'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Tipe File telah berhasil dihapus');window.location='../index.php?page=tipe-file'</script>";
    }else{
        echo "<script>alert('Tipe File telah gagal dihapus');window.location='../index.php?page=tipe-file'</script>";
    }
?>