<?php

include ('../include/config.php');

$carikode = $con->query("SELECT MAX(id_kasus) FROM kasus");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_kasus = "C".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
	$id_kasus = "C01";
}

$kasus = $_POST['kasus'];

$con->query("INSERT INTO kasus VALUES ('$id_kasus', '$kasus')");

if ($con->affected_rows > 0){
    echo "<script>alert('Kasus telah berhasil disimpan');window.location='../index.php?page=kasus'</script>";
}else{
    echo "<script>alert('Kasus telah gagal disimpan');window.location='../index.php?page=kasus'</script>";
}