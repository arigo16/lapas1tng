<?php
  include 'admin/include/config.php';

	$id_kunjungan_online = $_GET['id'];
	$r = $con->query("SELECT kunjungan_online.id_kunjungan_online, kunjungan_online.nama, kunjungan_online.no_ktp, kunjungan_online.no_hp, kunjungan_online.email, kunjungan_online.jenis_kelamin, kunjungan_online.alamat, kunjungan_online.tgl_kunjungan, kunjungan_online.id_napi, napi.nama_napi, napi.id_kasus, kasus.kasus, kunjungan_online.hubungan, kunjungan_online.pengikut_laki, kunjungan_online.pengikut_perempuan, kunjungan_online.pengikut_anak, kunjungan_online.id_barang_bawaan, kunjungan_online.foto_pengunjung FROM kasus INNER JOIN (napi INNER JOIN kunjungan_online ON napi.id_napi = kunjungan_online.id_napi) ON kasus.id_kasus = napi.id_kasus WHERE kunjungan_online.id_kunjungan_online='$id_kunjungan_online'");
	foreach ($r as $rr) {
    $id_kunjungan_online = $rr['id_kunjungan_online']
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pendaftaran Online</title>
</head>
<body onload="window.print()">
<div style="text-align: center"><h1>PENDAFTARAN ONLINE</h1></div>
<div style="text-align: center"><h3>Kode: <span style="color: red;"><u><?php echo $id_kunjungan_online;?></u></span></h3></div>
<table width="100%" cellpadding="10" style="border: 1px solid black;">
  <tbody>
    <tr>
      <td width="15%">Nama</td>
      <td width="25%"><strong><?php echo $rr['nama'];?></strong></td>
      <td width="15%">Nama Napi</td>
      <td width="25%"><strong><?php echo $rr['nama_napi'];?></strong></td>
      <td width="20%" rowspan="6" style="text-align: center"><img height="250px" width="180px" src="admin/assets/images/foto/<?php echo $rr['foto_pengunjung'];?>"></td>
    </tr>
    <tr>
      <td>No KTP</td>
      <td><strong><?php echo $rr['no_ktp'];?></strong></td>
      <td>Hubungan</td>
      <td><strong><?php echo $rr['hubungan'];?></strong></td>
    </tr>
    <tr>
      <td>No HP</td>
      <td><strong><?php echo $rr['no_hp'];?></strong></td>
      <td>Pengikut Pria</td>
      <td><strong><?php echo $rr['pengikut_laki'];?></strong></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><strong><?php echo $rr['email'];?></strong></td>
      <td>Pengikut Wanita</td>
      <td><strong><?php echo $rr['pengikut_perempuan'];?></strong></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><strong><?php echo $rr['jenis_kelamin'];?></strong></td>
      <td>Pengikut Anak2</td>
      <td><strong><?php echo $rr['pengikut_anak'];?></strong></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><strong><?php echo $rr['alamat'];?></strong></td>
      <td>Tgl Kunjungan</td>
      <td><strong><?php echo $rr['tgl_kunjungan'];?></strong></td>
    </tr>
  </tbody>
</table>
<br>
<table cellpadding="10" style="border: 1px solid black;">
  <?php
      $s = $con->query("SELECT barang_bawaan.id_barang_bawaan, barang_bawaan.id_barang, barang.barang, barang_bawaan.jumlah FROM barang INNER JOIN barang_bawaan ON barang.id_barang = barang_bawaan.id_barang WHERE barang_bawaan.id_barang_bawaan='$id_kunjungan_online'");
      while ($ss = $s->fetch_array()) {
  ?>
    <tr>
      <td width="15%"><strong>Barang</strong></td>
      <td width="20%"><?php echo $ss['barang'];?></td>
      <td width="10%">Jumlah <?php echo $ss['jumlah'];?></td>
    </tr>
  <?php
      }
  ?>
</table>
<div><span>*Harap diingat/dicatat kode kunjungan</span></div>
</body>
</html>

<?php
    }
?>