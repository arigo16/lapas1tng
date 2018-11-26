<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah File</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-file-add.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputJudulFile" class="col-sm-2 control-label">Judul File</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputJudulFile" name="judul_file" placeholder="Judul File" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputTipeFile" class="col-sm-2 control-label">Tipe File</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputTipeFile" name="id_tipe_file" required>
                            <option></option>
                            <?php
                                $r = $con->query("SELECT * FROM tipe_file");
                                foreach ($r as $rr) {
                            ?>
                                <option value="<?php echo $rr['id_tipe_file'];?>"><?php echo $rr['tipe_file'];?></option>
                            <?php
                                }
                            ?>
                        </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputFile" class="col-sm-2 control-label">File</label>
                        <div class="col-sm-10">
                            <input type="file" class="btn btn-default" name="files" id="inputFile" required>
                            <p class="help-block">
                                Ukuran jangan melebihi 10 Mb.
                            </p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=file" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>