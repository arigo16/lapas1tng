<?php
    include '../admin/include/config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pendaftaran Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="assets/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="assets/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">
    <link href="assets/css/forms.css" rel="stylesheet">

  </head>
  <body>
    <div class="header">
        <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="logo">
                    <h1><a href="index.php">Pendaftaran Kunjungan Online</a></h1>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                <div class="col-lg-12">
                </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                        <a href="../" class="dropdown-toggle">Kembali</a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-large">
                    <div class="panel-body">
                        <form action="controller/act-artikel-add.php" method="POST" class="form-horizontal" role="form">
                            <legend>Data Diri</legend>
                            <div class="form-group">
                                <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputNoktp" class="col-sm-2 control-label">No Kartu Tanda Penduduk (KTP)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNoktp" name="no_ktp" placeholder="No Kartu Tanda Penduduk (KTP)" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputNohp" class="col-sm-2 control-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNohp" name="no_ktp" placeholder="No Handphone" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="no_ktp" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputJeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="inputJeniskelamin" name="jenis_kelamin" required>
                                        <option disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAlamat" class="col-sm-2 control-label">Alamat Lengkap</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputtglkunjungan" class="col-sm-2 control-label">Tanggal Kunjungan</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputtglkunjungan" name="no_ktp" placeholder="Tanggal Kunjungan" required>
                                </div>
                            </div>

                            <legend>Data Napi</legend>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="text-field">Nama Napi</label>
                                <div class="col-md-7">
                                    <input class="form-control" placeholder="Nama Napi" type="text" list="list">
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
                                    <input type="text" class="form-control" name="kasus" placeholder="Kasus" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputHubungan" class="col-sm-2 control-label">Hubungan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="inputHubungan" name="hubungan" required>
                                        <option disabled selected>Pilih Hubungan</option>
                                        <?php
                                            $r = $con->query("SELECT * FROM hubungan");
                                            foreach ($r as $rr) {
                                        ?>
                                            <option value="<?php echo $rr['id_hubungan'];?>"><?php echo $rr['hubungan'];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <legend>Data Tambahan</legend>

                            <div class="form-group">
                                <label for="inputHubungan" class="col-sm-2 control-label">Jumlah Pengikut</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" id="inputPpria" name="pengikut_pria" placeholder="Jumlah Pengikut Pria" required>
                                </div>

                                <div class="col-sm-3">
                                    <input type="number" class="form-control" id="inputPwanita" name="pengikut_wanita" placeholder="Jumlah Pengikut Wanita" required>
                                </div>

                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="inputPanak" name="pengikut_anak" placeholder="Jumlah Pengikut Anak2" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputBarang" class="col-sm-2 control-label">Barang Bawaan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputBarang" name="barang" placeholder="Barang Bawaan" required>
                                </div>
                                <div class="col-sm-1">
                                    <input type="number" class="form-control" id="inputJmlbarang" name="jml_barang" placeholder="Jumlah Barang Bawaan" required>
                                </div>
                                <div class="col-sm-1 text-right">
                                    <a class="btn btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="" class="col-sm-2 control-label">List Barang</label>
                                <div class="col-sm-10">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th class="text-right">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Meja</td>
                                                <td>2</td>
                                                <td class="text-right"><a class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Kursi</td>
                                                <td>3</td>
                                                <td class="text-right"><a class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Pakaian</td>
                                                <td>8</td>
                                                <td class="text-right"><a class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Foto KTP Pengunjung</label>
                                <div class="col-md-10">
                                    <input type="file" class="btn btn-default" id="inputFoto">
                                    <p class="help-block">
                                        max size 1mb.
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
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>
    <script src="assets/vendors/select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/tags/js/bootstrap-tags.js"></script>
    <script src="assets/vendors/mask/jquery.maskedinput.min.js"></script>
    <script src="assets/vendors/moment/moment.min.js"></script>
    <script src="assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
    <link href="assets/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
    <script src="assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <link href="assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <script src="assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="assets/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script src="assets/vendors/ckeditor/ckeditor.js"></script>
    <script src="assets/vendors/ckeditor/adapters/jquery.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/tables.js"></script>
    <script src="assets/js/editors.js"></script>
  </body>
</html>