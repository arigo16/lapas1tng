<?php
date_default_timezone_set("Asia/Jakarta");

include ('../include/config.php');
session_start();

$id_artikel = $_GET['id_artikel'];
$judul_artikel = $_POST['judul_artikel'];
$id_kategori_artikel = $_POST['id_kategori_artikel'];
$artikel = $_POST['artikel'];
$username = $_SESSION['username'];
$tgl_terbit = date("Y-m-d H:i:s");

$con->query("UPDATE artikel SET judul_artikel='$judul_artikel', id_kategori_artikel='$id_kategori_artikel', artikel='$artikel', username='$username', tgl_terbit='$tgl_terbit' WHERE id_artikel='$id_artikel' ");

if ($con->affected_rows > 0){
	echo "<script>alert('Artikel telah berhasil disimpan');window.location='../index.php?page=artikel'</script>";
}else{
	echo "<script>alert('Artikel telah gagal disimpan');window.location='../index.php?page=artikel'</script>";
}