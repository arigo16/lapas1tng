<?php
	$id_kunjungan_online = $_GET['id_kunjungan_online'];
	$r = $con->query("SELECT * FROM kasus INNER JOIN (napi INNER JOIN kunjungan_online ON napi.id_napi = kunjungan_online.id_napi) ON kasus.id_kasus = napi.id_kasus WHERE kunjungan_online.id_kunjungan_online = '$id_kunjungan_online'");
	foreach ($r as $rr) {
        $id_kunjungan_online = $rr['id_kunjungan_online']
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-body">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <legend>Data Diri</legend>
                    <div class="form-group">
                        <label for="inputNama" class="col-sm-2 control-label">Tanggal Kunjungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTglKunjungan" name="tgl_kunjungan" value="<?php echo $rr['tgl_kunjungan'];?>" placeholder="Tanggal Kunjungan" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $rr['nama'];?>" placeholder="Nama" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNoktp" class="col-sm-2 control-label">No Kartu Tanda Penduduk (KTP)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNoktp" name="no_ktp" value="<?php echo $rr['no_ktp'];?>" placeholder="No Kartu Tanda Penduduk (KTP)" maxlength="16" onkeypress="return OnlyNumber(event)" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNohp" class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNohp" name="no_handphone" value="<?php echo $rr['no_hp'];?>" placeholder="No Handphone" maxlength="15" onkeypress="return OnlyNumber(event)" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $rr['email'];?>" maxlength="30" placeholder="Email" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputJeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $rr['jenis_kelamin'];?>" placeholder="Jenis Kelamin" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAlamat" class="col-sm-2 control-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat Lengkap" maxlength="100" readonly><?php echo $rr['alamat'];?></textarea>
                        </div>
                    </div>

                    <legend>Data Napi</legend>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="text-field">Nama Napi</label>
                        <div class="col-md-7">
                            <input class="form-control" placeholder="Nama Napi" name="nama_napi" value="<?php echo $rr['nama_napi'];?>" id="nama_napi" type="text" readonly>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kasus" value="<?php echo $rr['kasus'];?>" id="kasus" placeholder="Kasus" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Hubungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="hubungan" value="<?php echo $rr['hubungan'];?>" placeholder="Hubungan" readonly>
                        </div>
                    </div>

                    <legend>Data Tambahan</legend>

                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Pengikut Pria</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="inputPpria" name="pengikut_pria" value="<?php echo $rr['pengikut_laki'];?>" placeholder="Jumlah Pengikut Pria" readonly>
                        </div>
                        <label for="inputHubungan" class="col-sm-2 control-label">Pengikut Wanita</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="inputPwanita" name="pengikut_wanita" value="<?php echo $rr['pengikut_perempuan'];?>" placeholder="Jumlah Pengikut Wanita" readonly>
                        </div>
                        <label for="inputHubungan" class="col-sm-2 control-label">Pengikut Anak2</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="inputPanak" name="pengikut_anak" value="<?php echo $rr['pengikut_anak'];?>" placeholder="Jumlah Pengikut Anak2" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Bawaan Saat Ini</label>
                        <div class="col-sm-10">
                            <table class="table table-bordered" style="width: 100%">
				                <thead>
				                    <tr>
                                        <th>Barang</th>
                                        <th>Jumlah</th>
				                    </tr>
				                </thead>
				                 <tbody>
                                    <?php
                                        $t = $con->query("SELECT * FROM barang INNER JOIN barang_bawaan ON barang.id_barang = barang_bawaan.id_barang WHERE id_barang_bawaan = '$id_kunjungan_online'");
                                        while ($tt = $t->fetch_array()) {
                                    ?>
				                    <tr>
                                        <td><?php echo $tt['barang'];?></td>
                                        <td><?php echo $tt['jumlah'];?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
				                </tbody>
				            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Foto Pengunjung</label>
                        <div class="col-md-10">
                            <img height="250px" width="180px" style="margin-bottom: 10px" src="./assets/images/foto/<?php echo $rr['foto_pengunjung'];?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="../admin/page/kunjungan-cetak?id=<?php echo $id_kunjungan_online ?>" target="blank" class="btn btn-primary">Cetak</a>
                            <a class="btn btn-danger" onclick="history.back();">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>