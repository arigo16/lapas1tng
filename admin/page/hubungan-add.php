<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah Hubungan</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-hubungan-add.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">Hubungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputHubungan" name="hubungan" placeholder="Hubungan">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=hubungan" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>