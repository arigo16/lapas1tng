<?php
date_default_timezone_set("Asia/Jakarta");
session_start();
include ('../include/config.php');

$date = date("Y-m-d H:i:s");
$username = $_SESSION['username'];
$id_kunjungan_online = $_GET['id_kunjungan_online'];
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$no_handphone = $_POST['no_handphone'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$nama_napi = $_POST['nama_napi'];
$hubungan = $_POST['hubungan'];
$pengikut_pria = $_POST['pengikut_pria'];
$pengikut_wanita = $_POST['pengikut_wanita'];
$pengikut_anak = $_POST['pengikut_anak'];
$total_pengikut = $pengikut_pria + $pengikut_wanita + $pengikut_anak;
$barang1 = $_POST['barang1'];
$jml_barang1 = $_POST['jml_barang1'];
$barang2 = $_POST['barang2'];
$jml_barang2 = $_POST['jml_barang2'];
$barang3 = $_POST['barang3'];
$jml_barang3 = $_POST['jml_barang3'];
$name_photo = $_FILES['foto']['name'];

$r = $con->query("SELECT * FROM napi WHERE nama_napi = '$nama_napi'");
if ($r -> num_rows > 0){
	while ($rr = $r->fetch_array()){
		$id_napi = $rr['id_napi'];
	}
	
	if($total_pengikut <= 5){

        if($name_photo == ""){
            $con->query("UPDATE kunjungan_online SET nama='$nama', no_ktp='$no_ktp', no_hp='$no_handphone', email='$email', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_napi='$id_napi', hubungan='$hubungan', pengikut_laki='$pengikut_pria', pengikut_perempuan='$pengikut_wanita', pengikut_anak='$pengikut_anak', `status`='1' WHERE id_kunjungan_online='$id_kunjungan_online'");
            $con->query("INSERT INTO persetujuan_kunjungan_online VALUES (NULL, '$id_kunjungan_online', '$date', '$username')");

            if(isset($_POST['isChange'])){
                $con->query("DELETE FROM barang_bawaan WHERE id_barang_bawaan = '$id_kunjungan_online'");
                if($barang1 != '' && $jml_barang1 != ''){
                    $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang1', '$jml_barang1')");
                }

                if($barang2 != '' && $jml_barang2 != ''){
                    $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang2', '$jml_barang2')");
                }

                if($barang3 != '' && $jml_barang3 != ''){
                    $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang3', '$jml_barang3')");
                }
            }

            if ($con->affected_rows > 0){
                echo "<script>alert('Pendaftaran Kunjungan telah berhasil diverifikasi');window.location='../index.php?page=kunjungan'</script>";
            }else{
                echo "<script>alert('Pendaftaran gagal dilakukan');window.history.back()</script>";
            }
        }else{
            $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
            $photo = $_FILES['foto']['name'];
            $x = explode('.', $photo);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];

            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                move_uploaded_file($file_tmp, '../assets/images/foto/'.$photo);
                rename('../assets/images/foto/'.$photo, '../assets/images/foto/'.$id_kunjungan_online.'.'.$ekstensi);
                $con->query("UPDATE kunjungan_online SET nama='$nama', no_ktp='$no_ktp', no_hp='$no_handphone', email='$email', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_napi='$id_napi', hubungan='$hubungan', pengikut_laki='$pengikut_pria', pengikut_perempuan='$pengikut_wanita', pengikut_anak='$pengikut_anak', `status`='1' WHERE id_kunjungan_online='$id_kunjungan_online'");
                $con->query("INSERT INTO persetujuan_kunjungan_online VALUES (NULL, '$id_kunjungan_online', '$date', '$username')");

                if(isset($_POST['isChange'])){
                    $con->query("DELETE FROM barang_bawaan WHERE id_barang_bawaan = '$id_kunjungan_online'");
                    if($barang1 != '' && $jml_barang1 != ''){
                        $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang1', '$jml_barang1')");
                    }

                    if($barang2 != '' && $jml_barang2 != ''){
                        $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang2', '$jml_barang2')");
                    }

                    if($barang3 != '' && $jml_barang3 != ''){
                        $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang3', '$jml_barang3')");
                    }
                }

                if ($con->affected_rows > 0){
                    echo "<script>alert('Pendaftaran Kunjungan telah berhasil diverifikasi');window.location='../index.php?page=kunjungan'</script>";
                }else{
                    echo "<script>alert('Pendaftaran gagal dilakukan');window.history.back()</script>";
                }
            }else{
                echo "<script>alert('File bukan format photo');window.history.back()</script>";
            }
        }

	}else{
		echo "<script>alert('Pengikut lebih dari 5');window.history.back()</script>";
	}

}else{
	echo "<script>alert('Napi tidak ditemukan di data');window.history.back()</script>";
}

