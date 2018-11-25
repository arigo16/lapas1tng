<?php
    include '../include/config.php';

    $id_artikel = $_GET['id_artikel'];
    $db = $con->query("DELETE FROM artikel WHERE id_artikel='$id_artikel'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Artikel telah berhasil dihapus');window.location='../index.php?page=artikel'</script>";
    }else{
        echo "<script>alert('Artikel telah gagal dihapus');window.location='../index.php?page=artikel'</script>";
    }
?>