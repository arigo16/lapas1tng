<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Data Menunggu Persetujuan Kunjungan Hari Ini</div>
                <div class="panel-options">
                    <a href="index.php?page=kunjungan-add" data-rel="reload"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <a href="index.php?page=kunjungan-acc" class="btn btn-primary" style="margin-bottom: 10px"><i class="glyphicon glyphicon-ok"></i> Data Telah Disetujui</a>
                <a href="index.php?page=kunjungan-accnot" class="btn btn-danger" style="margin-bottom: 10px"><i class="glyphicon glyphicon-remove"></i> Data Belum Disetujui</a>
                <a href="index.php?page=kunjungan-all" class="btn btn-default" style="margin-bottom: 10px"><i class="glyphicon glyphicon-align-justify"></i> Seluruh Data</a>
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>KTP</th>
                            <th>Nama</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $date = date("Y-m-d");
                        $r = $con->query("SELECT * FROM kunjungan_online WHERE kunjungan_online.status = 0 AND tgl_kunjungan LIKE '$date%'");
                        while ($rr = $r->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $rr['id_kunjungan_online'];?></td>
                            <td><?php echo $rr['nama'];?></td>
                            <td><?php echo $rr['no_ktp'];?></td>
                            <td class="center"> 
                                <a href="index.php?page=kunjungan-edit&id_kunjungan_online=<?php echo $rr['id_kunjungan_online'];?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-check"></i> Verifikasi</a>
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