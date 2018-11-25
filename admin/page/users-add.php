<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah User</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-users-add.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputFullname" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputFullname" name="fullname" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputOtorisasi" class="col-sm-2 control-label">Otorisasi</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputOtorisasi" name="otorisasi">
                            <option value="Administrator">Administrator</option>
                            <option value="Humas">Humas</option>
                            <option value="Pelayanan Kunjungan">Pelayanan Kunjungan</option>
                        </select> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=users" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>