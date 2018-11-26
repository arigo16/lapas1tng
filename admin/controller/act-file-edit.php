<?php
date_default_timezone_set("Asia/Jakarta");

include ('../include/config.php');
session_start();

$id_file = $_GET['id_file'];
$judul_file = $_POST['judul_file'];
$id_tipe_file = $_POST['id_tipe_file'];
$username = $_SESSION['username'];
$tgl_terbit = date("Y-m-d H:i:s");

$con->query("UPDATE file SET judul_file='$judul_file', id_tipe_file='$id_tipe_file', username='$username', tgl_terbit='$tgl_terbit' WHERE id_file='$id_file' ");

if ($con->affected_rows > 0){
	echo "<script>alert('File telah berhasil disimpan');window.location='../index.php?page=file'</script>";
}else{
	echo "<script>alert('File telah gagal disimpan');window.location='../index.php?page=file'</script>";
}