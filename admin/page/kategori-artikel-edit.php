<?php
	$id_kategori_artikel = $_GET['id_kategori_artikel'];
	$r = $con->query("SELECT * FROM kategori_artikel WHERE id_kategori_artikel = '$id_kategori_artikel'");
	foreach ($r as $rr) {
        $id_kategori_artikel = $rr['id_kategori_artikel']
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit Kategori Artikel</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-kategori-artikel-edit.php?id_kategori_artikel=<?php echo $id_kategori_artikel; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputKategoriArtikel" class="col-sm-2 control-label">Kategori Artikel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputKategoriArtikel" value="<?php echo $rr['kategori_artikel'];?>" name="kategori_artikel" placeholder="Kategori Artikel">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php?page=kategori-artikel" class="btn btn-danger">Kembali</a>
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