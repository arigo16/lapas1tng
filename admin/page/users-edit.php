<?php
	$id = $_GET['username'];
	$r = $con->query("SELECT * FROM users WHERE username = '$id'");
	foreach ($r as $rr) {
        $username = $rr['username'];
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit User</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-users-edit.php?username=<?php echo $username; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUsername" value="<?php echo $rr['username'];?>" name="username" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Retyping Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputFullname" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputFullname" value="<?php echo $rr['fullname'];?>" name="fullname" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputOtorisasi" class="col-sm-2 control-label">Otorisasi</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputOtorisasi" name="otorisasi">
                            <option value="Administrator" <?php if($rr['otorisasi'] == "Administrator"){echo "selected";}?>>Administrator</option>
                            <option value="Humas" <?php if($rr['otorisasi'] == "Humas"){echo "selected";}?>>Humas</option>
                            <option value="Pelayanan Kunjungan" <?php if($rr['otorisasi'] == "Pelayanan Kunjungan"){echo "selected";}?>>Pelayanan Kunjungan</option>
                        </select> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php?page=users" class="btn btn-danger">Kembali</a>
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