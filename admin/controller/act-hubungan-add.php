<?php

include ('../include/config.php');

$carikode = $con->query("SELECT MAX(id_hubungan) FROM hubungan");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_hubungan = "H".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
	$id_hubungan = "H01";
}

$hubungan = $_POST['hubungan'];

$con->query("INSERT INTO hubungan VALUES ('$id_hubungan', '$hubungan')");

if ($con->affected_rows > 0){
    echo "<script>alert('Hubungan telah berhasil disimpan');window.location='../index.php?page=hubungan'</script>";
}else{
    echo "<script>alert('Hubungan telah gagal disimpan');window.location='../index.php?page=hubungan'</script>";
}