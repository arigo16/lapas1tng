<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-body">
                <form action="controller/act-pendaftaran-add.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <legend>Data Diri</legend>
                    <div class="form-group">
                        <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama*" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNoktp" class="col-sm-2 control-label">No Kartu Tanda Penduduk (KTP)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNoktp" name="no_ktp" placeholder="No Kartu Tanda Penduduk (KTP)*" maxlength="16" onkeypress="return OnlyNumber(event)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNohp" class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNohp" name="no_handphone" placeholder="No Handphone*" maxlength="15" onkeypress="return OnlyNumber(event)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="email" maxlength="30" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputJeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputJeniskelamin" name="jenis_kelamin" required>
                                <option disabled selected value="">Pilih Jenis Kelamin *</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAlamat" class="col-sm-2 control-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat Lengkap*" maxlength="100" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputtglkunjungan" class="col-sm-2 control-label">Tanggal Kunjungan</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="inputtglkunjungan" name="tgl_kunjungan" placeholder="Tanggal Kunjungan*" required>
                            <p class="note"><strong>Note:</strong> Hari Minggu dan Jumat libur.</p>
                        </div>
                        <div class="col-sm-2">
                            <input type="time" class="form-control" id="inputwaktukunjungan" name="waktu_kunjungan" placeholder="Waktu Kunjungan*" required>
                            <p class="note"><strong>Note:</strong> Waktu kunjungan 08:00 - 11:59.</p>
                        </div>
                    </div>

                    <legend>Data Napi</legend>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="text-field">Nama Napi</label>
                        <div class="col-md-7">
                            <input class="form-control" placeholder="Nama Napi*" name="nama_napi" id="nama_napi" type="text" onkeyup="isi_otomatis_kasus()" onchange="isi_otomatis_kasus()" list="list">
                            <datalist id="list">
                            <?php
                                $r = $con->query("SELECT * FROM napi");
                                foreach ($r as $rr) {
                            ?>
                                <option><?php echo $rr['nama_napi'];?></option>
                            <?php
                                }
                            ?>
                            </datalist> 
                            <p class="note"><strong>Note:</strong> wajib pilih berdasarkan daftar yang ada.</p>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kasus" id="kasus" placeholder="Kasus*" readonly required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Hubungan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputHubungan" name="hubungan" required>
                                <option value="" disabled selected>Pilih Hubungan*</option>
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Kakak">Kakak</option>
                                <option value="Ibu">Adik</option>
                                <option value="Ayah">Kakek</option>
                                <option value="Ibu">Nenek</option>
                                <option value="Ayah">Paman</option>
                                <option value="Ibu">Bibi</option>
                                <option value="Sepupu">Sepupu</option>
                                <option value="Keponakan">Keponakan</option>
                                <option value="Kerabat">Kerabat</option>
                            </select>
                        </div>
                    </div>

                    <legend>Data Tambahan</legend>

                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Jumlah Pengikut</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="inputPpria" name="pengikut_pria" placeholder="Jumlah Pengikut Pria">
                        </div>

                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="inputPwanita" name="pengikut_wanita" placeholder="Jumlah Pengikut Wanita">
                        </div>

                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="inputPanak" name="pengikut_anak" placeholder="Jumlah Pengikut Anak2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputBarang1" class="col-sm-2 control-label">Barang Bawaan 1</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="inputBarang1" name="barang1">
                                <option value="" selected>---</option>
                                <?php
                                    $r = $con->query("SELECT * FROM barang");
                                    foreach ($r as $rr) {
                                ?>
                                    <option value="<?php echo $rr['id_barang'];?>"><?php echo $rr['barang'];?></option>
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
                                    $r = $con->query("SELECT * FROM barang");
                                    foreach ($r as $rr) {
                                ?>
                                    <option value="<?php echo $rr['id_barang'];?>"><?php echo $rr['barang'];?></option>
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
                                    $r = $con->query("SELECT * FROM barang");
                                    foreach ($r as $rr) {
                                ?>
                                    <option value="<?php echo $rr['id_barang'];?>"><?php echo $rr['barang'];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <input type="number" class="form-control" id="inputJmlbarang3" name="jml_barang3" placeholder="Jumlah Barang Bawaan 3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Foto Pengunjung</label>
                        <div class="col-md-10">
                            <input type="file" class="btn btn-default" accept="image/*" id="inputFoto" name="foto" required>
                            <p class="help-block">
                                photo harus terlihat wajahnya dan ukuran maksimal 1mb. *Wajib diisi
                            </p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>