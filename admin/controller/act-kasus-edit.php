<?php

include ('../include/config.php');

$id_kasus = $_GET['id_kasus'];
$kasus = $_POST['kasus'];

$con->query("UPDATE kasus SET kasus='$kasus' WHERE id_kasus='$id_kasus' ");

if ($con->affected_rows > 0){
	echo "<script>alert('Kasus telah berhasil disimpan');window.location='../index.php?page=kasus'</script>";
}else{
	echo "<script>alert('Kasus telah gagal disimpan');window.location='../index.php?page=kasus'</script>";
}