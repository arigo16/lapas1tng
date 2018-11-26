<?php
	$id_file = $_GET['id_file'];
	$r = $con->query("SELECT * FROM file WHERE id_file = '$id_file'");
	foreach ($r as $rr) {
        $id_file = $rr['id_file']
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit File</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-file-edit.php?id_file=<?php echo $id_file; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputJudulFile" class="col-sm-2 control-label">Judul File</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputJudulFile" value="<?php echo $rr['judul_file'];?>" name="judul_file" name="judul_file" placeholder="Judul File" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputTipeFile" class="col-sm-2 control-label">Tipe File</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputTipeFile" name="id_tipe_file" required>
                        <option></option>
                            <?php
                                $t = $con->query("SELECT * FROM tipe_file");
                                foreach ($t as $tt) {
                            ?>
                                <option value="<?php echo $tt['id_tipe_file'];?>" <?php if($rr['id_tipe_file']==$tt['id_tipe_file']){echo "selected"; } ?>><?php echo $tt['tipe_file'];?></option>
                            <?php
                                }
                            ?>
                        </select> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php?page=file" class="btn btn-danger">Kembali</a>
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