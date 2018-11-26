<?php

include ('../include/config.php');

$id_hubungan = $_GET['id_hubungan'];
$hubungan = $_POST['hubungan'];

$con->query("UPDATE hubungan SET hubungan='$hubungan' WHERE id_hubungan='$id_hubungan' ");

if ($con->affected_rows > 0){
	echo "<script>alert('Hubungan telah berhasil disimpan');window.location='../index.php?page=hubungan'</script>";
}else{
	echo "<script>alert('Hubungan telah gagal disimpan');window.location='../index.php?page=hubungan'</script>";
}