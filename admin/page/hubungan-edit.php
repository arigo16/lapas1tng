<?php
	$id_hubungan = $_GET['id_hubungan'];
	$r = $con->query("SELECT * FROM hubungan WHERE id_hubungan = '$id_hubungan'");
	foreach ($r as $rr) {
        $id_hubungan = $rr['id_hubungan']
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit Hubungan</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-hubungan-edit.php?id_hubungan=<?php echo $id_hubungan; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputHubungan" class="col-sm-2 control-label">hubungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputHubungan" value="<?php echo $rr['hubungan'];?>" name="hubungan" placeholder="hubungan">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php?page=hubungan" class="btn btn-danger">Kembali</a>
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