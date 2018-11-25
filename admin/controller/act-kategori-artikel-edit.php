<?php

include ('../include/config.php');

$id_kategori_artikel = $_GET['id_kategori_artikel'];
$kategori_artikel = $_POST['kategori_artikel'];

$con->query("UPDATE kategori_artikel SET kategori_artikel='$kategori_artikel' WHERE id_kategori_artikel='$id_kategori_artikel' ");

if ($con->affected_rows > 0){
	echo "<script>alert('Kategori Artikel telah berhasil disimpan');window.location='../index.php?page=kategori-artikel'</script>";
}else{
	echo "<script>alert('Kategori Artikel telah gagal disimpan');window.location='../index.php?page=kategori-artikel'</script>";
}