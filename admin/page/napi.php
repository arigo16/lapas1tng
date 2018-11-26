<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Data Napi</div>
                <div class="panel-options">
                    <a href="index.php?page=napi-add" data-rel="reload"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
            <div class="panel-body">
            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>Nama Napi</th>
                        <th>Kasus</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $r = $con->query("SELECT napi.id_napi, napi.nama_napi, kasus.kasus FROM kasus INNER JOIN napi ON kasus.id_kasus = napi.id_kasus");
                    while ($rr = $r->fetch_array()) {
                ?>
                    <tr>
                        <td><?php echo $rr['nama_napi'];?></td>
                        <td><?php echo $rr['kasus'];?></td>
                        <td class="center"> 
                            <a href="index.php?page=napi-edit&id_napi=<?php echo $rr['id_napi'];?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="controller/act-napi-del.php?id_napi=<?php echo $rr['id_napi'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
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