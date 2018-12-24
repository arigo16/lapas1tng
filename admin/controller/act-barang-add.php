<?php

include ('../include/config.php');

$carikode = $con->query("SELECT MAX(id_barang) FROM barang");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_barang = "B".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
	$id_barang = "B01";
}

$barang = $_POST['barang'];

$con->query("INSERT INTO barang VALUES ('$id_barang', '$barang')");

if ($con->affected_rows > 0){
    echo "<script>alert('Barang telah berhasil disimpan');window.location='../index.php?page=barang'</script>";
}else{
    echo "<script>alert('Barang telah gagal disimpan');window.location='../index.php?page=barang'</script>";
}