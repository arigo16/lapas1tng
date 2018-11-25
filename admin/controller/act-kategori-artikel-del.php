<?php
    include '../include/config.php';

    $id_kategori_artikel = $_GET['id_kategori_artikel'];
    $db = $con->query("DELETE FROM kategori_artikel WHERE id_kategori_artikel='$id_kategori_artikel'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Kategori Artikel telah berhasil dihapus');window.location='../index.php?page=kategori-artikel'</script>";
    }else{
        echo "<script>alert('Kategori Artikel telah gagal dihapus');window.location='../index.php?page=kategori-artikel'</script>";
    }
?>