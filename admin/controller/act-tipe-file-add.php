<?php

include ('../include/config.php');

$carikode = $con->query("SELECT MAX(id_tipe_file) FROM tipe_file");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_tipe_file = "T".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
	$id_tipe_file = "T01";
}

$tipe_file = $_POST['tipe_file'];

$con->query("INSERT INTO tipe_file VALUES ('$id_tipe_file', '$tipe_file')");

if ($con->affected_rows > 0){
    echo "<script>alert('Tipe File telah berhasil disimpan');window.location='../index.php?page=tipe-file'</script>";
}else{
    echo "<script>alert('Tipe File Artikel telah gagal disimpan');window.location='../index.php?page=tipe-file'</script>";
}