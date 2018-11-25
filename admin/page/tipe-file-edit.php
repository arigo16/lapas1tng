<?php
	$id_tipe_file = $_GET['id_tipe_file'];
	$r = $con->query("SELECT * FROM tipe_file WHERE id_tipe_file = '$id_tipe_file'");
	foreach ($r as $rr) {
        $id_tipe_file = $rr['id_tipe_file']
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit Tipe File</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-tipe-file-edit.php?id_tipe_file=<?php echo $id_tipe_file; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputTipeFile" class="col-sm-2 control-label">Tipe File</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTipeFile" value="<?php echo $rr['tipe_file'];?>" name="tipe_file" placeholder="Tipe File">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php?page=tipe-file" class="btn btn-danger">Kembali</a>
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