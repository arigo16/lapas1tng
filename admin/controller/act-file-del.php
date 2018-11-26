<?php
    include '../include/config.php';

    $id_file = $_GET['id_file'];
    $r = $con->query("SELECT * FROM file WHERE id_file = '$id_file'");
    foreach ($r as $rr) {
        $link_file = $rr['link_file'];
    }

    unlink("../$link_file");
    $db = $con->query("DELETE FROM file WHERE id_file='$id_file'");

    if ($con->affected_rows > 0){
        echo "<script>alert('File telah berhasil dihapus');window.location='../index.php?page=file'</script>";
    }else{
        echo "<script>alert('File telah gagal dihapus');window.location='../index.php?page=file'</script>";
    }
?>