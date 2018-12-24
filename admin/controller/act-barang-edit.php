<?php

include ('../include/config.php');

$id_barang = $_GET['id_barang'];
$barang = $_POST['barang'];

$con->query("UPDATE barang SET barang='$barang' WHERE id_barang='$id_barang' ");

if ($con->affected_rows > 0){
	echo "<script>alert('Barang telah berhasil disimpan');window.location='../index.php?page=barang'</script>";
}else{
	echo "<script>alert('Barang telah gagal disimpan');window.location='../index.php?page=barang'</script>";
}