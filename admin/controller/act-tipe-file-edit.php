<?php

include ('../include/config.php');

$id_tipe_file = $_GET['id_tipe_file'];
$tipe_file = $_POST['tipe_file'];

$con->query("UPDATE tipe_file SET tipe_file='$tipe_file' WHERE id_tipe_file='$id_tipe_file'");

if ($con->affected_rows > 0){
	echo "<script>alert('Tipe File telah berhasil disimpan');window.location='../index.php?page=tipe-file'</script>";
}else{
	echo "<script>alert('Tipe File telah gagal disimpan');window.location='../index.php?page=tipe-file'</script>";
}