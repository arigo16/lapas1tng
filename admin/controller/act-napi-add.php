<?php
include ('../include/config.php');
session_start();

$carikode = $con->query("SELECT MAX(id_napi) FROM napi");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_napi = "N".str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
	$id_napi = "N0001";
}

$nama_napi = $_POST['nama_napi'];
$id_kasus = $_POST['id_kasus'];

$con->query("INSERT INTO napi VALUES ('$id_napi', '$nama_napi', '$id_kasus')");

if ($con->affected_rows > 0){
    echo "<script>alert('Napi telah berhasil disimpan');window.location='../index.php?page=napi'</script>";
}else{
    echo "<script>alert('Napi telah gagal disimpan');window.location='../index.php?page=napi'</script>";
}