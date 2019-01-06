<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
        <?php
            if ($otorisasi == "Administrator") {
        ?>
            <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
            <li><a href="index.php?page=users"><i class="glyphicon glyphicon-user"></i> Data User</a></li>
            <li><a href="index.php?page=napi"><i class="glyphicon glyphicon-star"></i> Data Napi</a></li>
            <li><a href="index.php?page=kasus"><i class="glyphicon glyphicon-screenshot"></i> Data Kasus</a></li>
            <li><a href="index.php?page=barang"><i class="glyphicon glyphicon-heart"></i> Data Barang</a></li>
            <li><a href="index.php?page=kategori-artikel"><i class="glyphicon glyphicon-tag"></i> Data Kategori Artikel</a></li>
            <li><a href="index.php?page=tipe-file"><i class="glyphicon glyphicon-tasks"></i> Data Tipe File</a></li>
            <li><a href="index.php?page=artikel"><i class="glyphicon glyphicon-pencil"></i> Input Artikel</a></li>
            <li><a href="index.php?page=file"><i class="glyphicon glyphicon-bookmark"></i> Input File</a></li>
            <li><a href="index.php?page=kunjungan"><i class="glyphicon glyphicon-log-in"></i> Kunjungan</a></li>
            <li><a href="index.php?page=lap-kunjungan"><i class="glyphicon glyphicon-file"></i> Laporan Kunjungan</a></li>
        </ul>
        <?php
            } else if ($otorisasi == "Humas") {
        ?>
            <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
            <li><a href="index.php?page=artikel"><i class="glyphicon glyphicon-pencil"></i> Input Artikel</a></li>
            <li><a href="index.php?page=file"><i class="glyphicon glyphicon-bookmark"></i> Input File</a></li>
        <?php
            } else if ($otorisasi == "Pelayanan Kunjungan") {
        ?>
            <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
            <li><a href="index.php?page=kunjungan"><i class="glyphicon glyphicon-log-in"></i> Kunjungan</a></li>
            <li><a href="index.php?page=lap-kunjungan"><i class="glyphicon glyphicon-file"></i> Laporan Kunjungan</a></li>
        <?php
            }
        ?>
    </div>
</div>