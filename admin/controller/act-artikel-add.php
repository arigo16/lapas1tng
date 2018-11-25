<?php
date_default_timezone_set("Asia/Jakarta");

include ('../include/config.php');
session_start();

$carikode = $con->query("SELECT MAX(id_artikel) FROM artikel");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_artikel = "A".str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
	$id_artikel = "A0001";
}

$judul_artikel = $_POST['judul_artikel'];
$id_kategori_artikel = $_POST['id_kategori_artikel'];
$artikel = $_POST['artikel'];
$username = $_SESSION['username'];
$tgl_terbit = date("Y-m-d H:i:s");

$con->query("INSERT INTO artikel VALUES ('$id_artikel', '$judul_artikel', '$id_kategori_artikel', '$artikel', '$username', '$tgl_terbit', '0')");

if ($con->affected_rows > 0){
    echo "<script>alert('Artikel telah berhasil disimpan');window.location='../index.php?page=artikel'</script>";
}else{
    echo "<script>alert('Artikel telah gagal disimpan');window.location='../index.php?page=artikel'</script>";
}