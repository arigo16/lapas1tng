<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Data Tipe File</div>
                <div class="panel-options">
                    <a href="index.php?page=tipe-file-add" data-rel="reload"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
            <div class="panel-body">
            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>Tipe File</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $r = $con->query("SELECT * FROM tipe_file");
                    while ($rr = $r->fetch_array()) {
                ?>
                    <tr>
                        <td><?php echo $rr['tipe_file'];?></td>
                        <td class="center"> 
                            <a href="index.php?page=tipe-file-edit&id_tipe_file=<?php echo $rr['id_tipe_file'];?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="controller/act-tipe-file-del.php?id_tipe_file=<?php echo $rr['id_tipe_file'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
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