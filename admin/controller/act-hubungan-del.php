<?php
    include '../include/config.php';

    $id_hubungan = $_GET['id_hubungan'];
    $db = $con->query("DELETE FROM hubungan WHERE id_hubungan='$id_hubungan'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Hubungan telah berhasil dihapus');window.location='../index.php?page=hubungan'</script>";
    }else{
        echo "<script>alert('Hubungan telah gagal dihapus');window.location='../index.php?page=hubungan'</script>";
    }
?>