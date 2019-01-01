<?php
date_default_timezone_set("Asia/Jakarta");
include ('../admin/include/config.php');

function assign_rand_value($num) {
    switch($num) {
        case "1"  : $rand_value = "a"; break;
        case "2"  : $rand_value = "b"; break;
        case "3"  : $rand_value = "c"; break;
        case "4"  : $rand_value = "d"; break;
        case "5"  : $rand_value = "e"; break;
        case "6"  : $rand_value = "f"; break;
        case "7"  : $rand_value = "g"; break;
        case "8"  : $rand_value = "h"; break;
        case "9"  : $rand_value = "i"; break;
        case "10" : $rand_value = "j"; break;
        case "11" : $rand_value = "k"; break;
        case "12" : $rand_value = "l"; break;
        case "13" : $rand_value = "m"; break;
        case "14" : $rand_value = "n"; break;
        case "15" : $rand_value = "o"; break;
        case "16" : $rand_value = "p"; break;
        case "17" : $rand_value = "q"; break;
        case "18" : $rand_value = "r"; break;
        case "19" : $rand_value = "s"; break;
        case "20" : $rand_value = "t"; break;
        case "21" : $rand_value = "u"; break;
        case "22" : $rand_value = "v"; break;
        case "23" : $rand_value = "w"; break;
        case "24" : $rand_value = "x"; break;
        case "25" : $rand_value = "y"; break;
        case "26" : $rand_value = "z"; break;
        case "27" : $rand_value = "0"; break;
        case "28" : $rand_value = "1"; break;
        case "29" : $rand_value = "2"; break;
        case "30" : $rand_value = "3"; break;
        case "31" : $rand_value = "4"; break;
        case "32" : $rand_value = "5"; break;
        case "33" : $rand_value = "6"; break;
        case "34" : $rand_value = "7"; break;
        case "35" : $rand_value = "8"; break;
        case "36" : $rand_value = "9"; break;
    }
    return $rand_value;
}

function get_rand_alphanumeric($length) {
    if ($length>0) {
        $rand_id="";
        for ($i=1; $i<=$length; $i++) {
            mt_srand((double)microtime() * 1000000);
            $num = mt_rand(1,36);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}

$year = date("y");
$month = date("m");
$day = date("d");
$code1 = get_rand_alphanumeric(2);
$code2 = get_rand_alphanumeric(2);

$id_kunjungan_online = $year . $code1 . $month . $code2 . $day;
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$no_handphone = $_POST['no_handphone'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$tgl_kunjungan = $_POST['tgl_kunjungan'];
$waktu_kunjungan = $_POST['waktu_kunjungan'];
$tgl_kunjungan_fix = $tgl_kunjungan . ' ' . $waktu_kunjungan . ':00';
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

$r = $con->query("SELECT * FROM napi WHERE nama_napi = '$nama_napi'");
if ($r -> num_rows > 0){
	while ($rr = $r->fetch_array()){
		$id_napi = $rr['id_napi'];
	}
	
	if($total_pengikut <= 5){
        $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
        $photo = $_FILES['foto']['name'];
        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, '../admin/assets/images/foto/'.$photo);
            rename('../admin/assets/images/foto/'.$photo, '../admin/assets/images/foto/'.$id_kunjungan_online.'.'.$ekstensi);
            $con->query("INSERT INTO kunjungan_online VALUES ('$id_kunjungan_online', '$nama', '$no_ktp', '$no_handphone', '$email', '$jenis_kelamin', '$alamat', '$tgl_kunjungan_fix', '$id_napi', '$hubungan', '$pengikut_pria', '$pengikut_wanita', '$pengikut_anak', '$id_kunjungan_online', '$id_kunjungan_online.$ekstensi')");

            if($barang1 != '' && $jml_barang1 != ''){
                $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang1', '$jml_barang1')");
            }

            if($barang2 != '' && $jml_barang2 != ''){
                $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang2', '$jml_barang2')");
            }

            if($barang3 != '' && $jml_barang3 != ''){
                $con->query("INSERT INTO barang_bawaan VALUES (NULL, '$id_kunjungan_online', '$barang3', '$jml_barang3')");
            }
            
            if ($con->affected_rows > 0){
                echo "<script>
                    alert('Pendaftaran berhasil dilakukan');
                    window.location='../pendaftaran-sukses?id=$id_kunjungan_online';
                </script>";
            }else{
                echo "<script>alert('Pendaftaran gagal dilakukan');window.location='../pendaftaran'</script>";
            }
        }else{
            echo "<script>alert('File bukan format photo');window.history.back()</script>";
        }

	}else{
		echo "<script>alert('Pengikut lebih dari 5');window.history.back()</script>";
	}

}else{
	echo "<script>alert('Napi tidak ditemukan di data');window.history.back()</script>";
}

