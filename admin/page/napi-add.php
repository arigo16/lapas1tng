<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah Napi</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-napi-add.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputNapi" class="col-sm-2 control-label">Nama Napi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNapi" name="nama_napi" placeholder="Nama Napi" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputKasus" class="col-sm-2 control-label">Kasus</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputKasus" name="id_kasus" required>
                            <option></option>
                            <?php
                                $r = $con->query("SELECT * FROM kasus");
                                foreach ($r as $rr) {
                            ?>
                                <option value="<?php echo $rr['id_kasus'];?>"><?php echo $rr['kasus'];?></option>
                            <?php
                                }
                            ?>
                        </select> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=napi" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>