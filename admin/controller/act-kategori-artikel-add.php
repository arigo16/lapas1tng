<?php

include ('../include/config.php');

$carikode = $con->query("SELECT MAX(id_kategori_artikel) FROM kategori_artikel");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_kategori_artikel = "K".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
	$id_kategori_artikel = "K01";
}

$kategori_artikel = $_POST['kategori_artikel'];

$con->query("INSERT INTO kategori_artikel VALUES ('$id_kategori_artikel', '$kategori_artikel')");

if ($con->affected_rows > 0){
    echo "<script>alert('Kategori Artikel telah berhasil disimpan');window.location='../index.php?page=kategori-artikel'</script>";
}else{
    echo "<script>alert('Kategori Artikel telah gagal disimpan');window.location='../index.php?page=kategori-artikel'</script>";
}