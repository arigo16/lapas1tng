<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Data File</div>
                <div class="panel-options">
                    <a href="index.php?page=file-add" data-rel="reload"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
            <div class="panel-body">
            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>Judul File</th>
                        <th>Tipe File</th>
                        <th>Tanggal Terbit</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $r = $con->query("SELECT file.id_file, file.link_file, file.judul_file, tipe_file.tipe_file, file.tgl_terbit FROM users INNER JOIN (tipe_file INNER JOIN file ON tipe_file.id_tipe_file = file.id_tipe_file) ON users.username = file.username");
                    while ($rr = $r->fetch_array()) {
                ?>
                    <tr>
                        <td><a href="<?php echo $rr['link_file'];?>" target="blank"><?php echo $rr['judul_file'];?></a></td>
                        <td><?php echo $rr['tipe_file'];?></td>
                        <td><?php echo $rr['tgl_terbit'];?></td>
                        <td class="center"> 
                            <a href="index.php?page=file-edit&id_file=<?php echo $rr['id_file'];?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="controller/act-file-del.php?id_file=<?php echo $rr['id_file'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>