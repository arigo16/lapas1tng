<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Laporan Data Kunjungan Periode</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-kasus-add.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputTanggalAwal" class="col-sm-2 control-label">Periode</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="inputTanggalAwal" name="tgl_awal" placeholder="Tanggal Awal">
                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="inputTanggaAkhir" name="tgl_akhir" placeholder="Tanggal Akhir">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Lihat</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Laporan Data Kunjungan Periode Berdasarkan Napi</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-kasus-add.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputTanggalAwal" class="col-sm-2 control-label">Periode</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="inputTanggalAwal" name="tgl_awal" placeholder="Tanggal Awal">
                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="inputTanggaAkhir" name="tgl_akhir" placeholder="Tanggal Akhir">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="text-field">Nama Napi</label>
                        <div class="col-md-5">
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
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="kasus" id="kasus" placeholder="Kasus*" readonly required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Lihat</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>