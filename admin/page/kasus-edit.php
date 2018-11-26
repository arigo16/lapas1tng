<?php
	$id_kasus = $_GET['id_kasus'];
	$r = $con->query("SELECT * FROM kasus WHERE id_kasus = '$id_kasus'");
	foreach ($r as $rr) {
        $id_kasus = $rr['id_kasus']
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit Kasus</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-kasus-edit.php?id_kasus=<?php echo $id_kasus; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputKasus" class="col-sm-2 control-label">Kasus</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputKasus" value="<?php echo $rr['kasus'];?>" name="kasus" placeholder="Kasus">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php?page=kasus" class="btn btn-danger">Kembali</a>
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