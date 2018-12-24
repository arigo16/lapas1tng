<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah Barang</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-barang-add.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputBarang" class="col-sm-2 control-label">Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputBarang" name="barang" placeholder="Barang">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=barang" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>