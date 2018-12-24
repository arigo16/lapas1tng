<?php
date_default_timezone_set("Asia/Jakarta");

include ('../include/config.php');
session_start();

$carikode = $con->query("SELECT MAX(id_file) FROM file");
$datakode = mysqli_fetch_array($carikode);

if ($datakode) {
	$nilaikode = substr($datakode[0], 1);
	$kode = (int) $nilaikode;
	$kode = $kode + 1;
	$id_file = "F".str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
	$id_file = "F0001";
}

$judul_file = $_POST['judul_file'];
$id_tipe_file = $_POST['id_tipe_file'];
$username = $_SESSION['username'];
$tgl_terbit = date("Y-m-d H:i:s");

$file = $_FILES['files']['name'];
$x = explode('.', $file);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['files']['size'];
$file_tmp = $_FILES['files']['tmp_name'];

if($ukuran < 1044070){			
	move_uploaded_file($file_tmp, '../assets/file/'.$file);
	$con->query("INSERT INTO file VALUES ('$id_file', '$judul_file', '$id_tipe_file', 'assets/file/$file', '$username', '$tgl_terbit', '0')");

	if ($con->affected_rows > 0){
		echo "<script>alert('File telah berhasil disimpan');window.location='../index.php?page=file'</script>";
	}else{
		echo "<script>alert('File telah gagal disimpan');window.location='../index.php?page=file'</script>";
	}

}else{
	echo "<script>alert('Ukuran file terlalu besar');window.location='../index.php?page=file'</script>";
}