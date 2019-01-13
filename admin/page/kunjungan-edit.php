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
                <form action="controller/act-pendaftaran-edit.php?id_kunjungan_online=<?php echo $id_kunjungan_online; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <legend>Data Diri</legend>
                    <div class="form-group">
                        <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $rr['nama'];?>" placeholder="Nama*" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNoktp" class="col-sm-2 control-label">No Kartu Tanda Penduduk (KTP)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNoktp" name="no_ktp" value="<?php echo $rr['no_ktp'];?>" placeholder="No Kartu Tanda Penduduk (KTP)*" maxlength="16" onkeypress="return OnlyNumber(event)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNohp" class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNohp" name="no_handphone" value="<?php echo $rr['no_hp'];?>" placeholder="No Handphone*" maxlength="15" onkeypress="return OnlyNumber(event)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $rr['email'];?>" maxlength="30" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputJeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputJeniskelamin" name="jenis_kelamin" required>
                                <option value="Pria" <?php if($rr['jenis_kelamin'] == "Pria"){ echo "selected";} ?>>Pria</option>
                                <option value="Wanita" <?php if($rr['jenis_kelamin'] == "Wanita"){ echo "selected";} ?>>Wanita</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAlamat" class="col-sm-2 control-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat Lengkap*" maxlength="100" required><?php echo $rr['alamat'];?></textarea>
                        </div>
                    </div>

                    <legend>Data Napi</legend>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="text-field">Nama Napi</label>
                        <div class="col-md-7">
                            <input class="form-control" placeholder="Nama Napi*" name="nama_napi" value="<?php echo $rr['nama_napi'];?>" id="nama_napi" type="text" onkeyup="isi_otomatis_kasus()" onchange="isi_otomatis_kasus()" list="list">
                            <datalist id="list">
                            <?php
                                $s = $con->query("SELECT * FROM napi");
                                foreach ($s as $ss) {
                            ?>
                                <option><?php echo $ss['nama_napi'];?></option>
                            <?php
                                }
                            ?>
                            </datalist> 
                            <p class="note"><strong>Note:</strong> wajib pilih berdasarkan daftar yang ada.</p>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kasus" value="<?php echo $rr['kasus'];?>" id="kasus" placeholder="Kasus*" readonly required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Hubungan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputHubungan" name="hubungan" required>
                                <option value="Ayah" <?php if($rr['hubungan'] == "Ayah"){ echo "selected";} ?>>Ayah</option>
                                <option value="Ibu" <?php if($rr['hubungan'] == "Ibu"){ echo "selected";} ?>>Ibu</option>
                                <option value="Kakak" <?php if($rr['hubungan'] == "Kakak"){ echo "selected";} ?>>Kakak</option>
                                <option value="Adik" <?php if($rr['hubungan'] == "Adik"){ echo "selected";} ?>>Adik</option>
                                <option value="Kakek" <?php if($rr['hubungan'] == "Kakek"){ echo "selected";} ?>>Kakek</option>
                                <option value="Nenek" <?php if($rr['hubungan'] == "Nenek"){ echo "selected";} ?>>Nenek</option>
                                <option value="Paman" <?php if($rr['hubungan'] == "Paman"){ echo "selected";} ?>>Paman</option>
                                <option value="Bibi" <?php if($rr['hubungan'] == "Bibi"){ echo "selected";} ?>>Bibi</option>
                                <option value="Sepupu" <?php if($rr['hubungan'] == "Sepupu"){ echo "selected";} ?>>Sepupu</option>
                                <option value="Keponakan" <?php if($rr['hubungan'] == "Keponakan"){ echo "selected";} ?>>Keponakan</option>
                                <option value="Kerabat" <?php if($rr['hubungan'] == "Kerabat"){ echo "selected";} ?>>Kerabat</option>
                            </select>
                        </div>
                    </div>

                    <legend>Data Tambahan</legend>

                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Pengikut Pria</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="inputPpria" name="pengikut_pria" value="<?php echo $rr['pengikut_laki'];?>" placeholder="Jumlah Pengikut Pria">
                        </div>
                        <label for="inputHubungan" class="col-sm-2 control-label">Pengikut Wanita</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="inputPwanita" name="pengikut_wanita" value="<?php echo $rr['pengikut_perempuan'];?>" placeholder="Jumlah Pengikut Wanita">
                        </div>
                        <label for="inputHubungan" class="col-sm-2 control-label">Pengikut Anak2</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="inputPanak" name="pengikut_anak" value="<?php echo $rr['pengikut_anak'];?>" placeholder="Jumlah Pengikut Anak2">
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
                        <label for="ubahBarang" class="col-sm-2 control-label">Ubah Barang</label>
                        <div class="col-sm-10">
                            <input name="isChange" id="checkBarang" onclick="showBarang()" type="checkbox"> Centang jika barang bawaan berubah
                        </div>
                    </div>
 
                    <div id="areaBarang" style="display:none">
                        <div class="form-group">
                            <label for="inputBarang1" class="col-sm-2 control-label">Barang Bawaan 1</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="inputBarang1" name="barang1">
                                    <option value="" selected>---</option>
                                    <?php
                                        $t = $con->query("SELECT * FROM barang");
                                        foreach ($t as $tt) {
                                    ?>
                                        <option value="<?php echo $tt['id_barang'];?>"><?php echo $tt['barang'];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <input type="number" class="form-control" id="inputJmlbarang1" name="jml_barang1" placeholder="Jumlah Barang Bawaan1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputBarang2" class="col-sm-2 control-label">Barang Bawaan 2</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="inputBarang2" name="barang2">
                                    <option value="" selected>---</option>
                                    <?php
                                        $t = $con->query("SELECT * FROM barang");
                                        foreach ($t as $tt) {
                                    ?>
                                        <option value="<?php echo $tt['id_barang'];?>"><?php echo $tt['barang'];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <input type="number" class="form-control" id="inputJmlbarang2" name="jml_barang2" placeholder="Jumlah Barang Bawaan 2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputBarang3" class="col-sm-2 control-label">Barang Bawaan 3</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="inputBarang3" name="barang3">
                                    <option value="" selected>---</option>
                                    <?php
                                        $t = $con->query("SELECT * FROM barang");
                                        foreach ($t as $tt) {
                                    ?>
                                        <option value="<?php echo $tt['id_barang'];?>"><?php echo $tt['barang'];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <input type="number" class="form-control" id="inputJmlbarang3" name="jml_barang3" placeholder="Jumlah Barang Bawaan 3">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Foto Pengunjung</label>
                        <div class="col-md-10">
                        <img height="250px" width="180px" style="margin-bottom: 10px" src="./assets/images/foto/<?php echo $rr['foto_pengunjung'];?>">
                            <input type="file" class="btn btn-default" accept="image/*" id="inputFoto" name="foto">
                            <p class="help-block">
                                pilih foto baru jika ada perubahan foto.
                            </p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Verifikasi</button>
                            <button type="reset" class="btn btn-danger" onclick="history.back();">Kembali</button>
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