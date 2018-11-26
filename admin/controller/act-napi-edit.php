<?php
include ('../include/config.php');
session_start();

$id_napi = $_GET['id_napi'];
$nama_napi = $_POST['nama_napi'];
$id_kasus = $_POST['id_kasus'];

$con->query("UPDATE napi SET nama_napi='$nama_napi', id_kasus='$id_kasus' WHERE id_napi='$id_napi' ");

if ($con->affected_rows > 0){
	echo "<script>alert('Napi telah berhasil disimpan');window.location='../index.php?page=napi'</script>";
}else{
	echo "<script>alert('Napi telah gagal disimpan');window.location='../index.php?page=napi'</script>";
}