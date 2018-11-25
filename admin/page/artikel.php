<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Data Artikel</div>
                <div class="panel-options">
                    <a href="index.php?page=artikel-add" data-rel="reload"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
            <div class="panel-body">
            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>Judul Artikel</th>
                        <th>Kategori</th>
                        <th>Tanggal Terbit</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $r = $con->query("SELECT artikel.id_artikel, artikel.judul_artikel, kategori_artikel.kategori_artikel, artikel.tgl_terbit FROM kategori_artikel INNER JOIN artikel ON kategori_artikel.id_kategori_artikel = artikel.id_kategori_artikel");
                    while ($rr = $r->fetch_array()) {
                ?>
                    <tr>
                        <td><?php echo $rr['judul_artikel'];?></td>
                        <td><?php echo $rr['kategori_artikel'];?></td>
                        <td><?php echo $rr['tgl_terbit'];?></td>
                        <td class="center"> 
                            <a href="index.php?page=artikel-edit&id_artikel=<?php echo $rr['id_artikel'];?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="controller/act-artikel-del.php?id_artikel=<?php echo $rr['id_artikel'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
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