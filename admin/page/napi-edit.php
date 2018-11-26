<?php
	$id_napi = $_GET['id_napi'];
	$r = $con->query("SELECT * FROM napi WHERE id_napi = '$id_napi'");
	foreach ($r as $rr) {
        $id_napi = $rr['id_napi']
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit Napi</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-napi-edit.php?id_napi=<?php echo $id_napi; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputNapi" class="col-sm-2 control-label">Nama Napi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNapi" value="<?php echo $rr['nama_napi'];?>" name="nama_napi" placeholder="Nama Napi">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputKasus" class="col-sm-2 control-label">Kasus</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputKasus" name="id_kasus">
                            <option></option>
                            <?php
                                $t = $con->query("SELECT * FROM kasus");
                                foreach ($t as $tt) {
                            ?>
                                <option value="<?php echo $tt['id_kasus'];?>" <?php if($rr['id_kasus']==$tt['id_kasus']){echo "selected"; } ?>><?php echo $tt['kasus'];?></option>
                            <?php
                                }
                            ?>
                        </select> 
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