<?php
	$id_artikel = $_GET['id_artikel'];
	$r = $con->query("SELECT * FROM artikel WHERE id_artikel = '$id_artikel'");
	foreach ($r as $rr) {
        $id_artikel = $rr['id_artikel'];
        $judul_artikel = $rr['judul_artikel'];
?>

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit Artikel</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-artikel-edit.php?id_artikel=<?php echo $id_artikel; ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputJudulArtikel" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputJudulArtikel" value='<?php echo $judul_artikel;?>' name="judul_artikel" placeholder="Judul Artikel">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputKategoriArtikel" class="col-sm-2 control-label">Kategori Artikel</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputKategoriArtikel" name="id_kategori_artikel">
                            <option></option>
                            <?php
                                $t = $con->query("SELECT * FROM kategori_artikel");
                                foreach ($t as $tt) {
                            ?>
                                <option value="<?php echo $tt['id_kategori_artikel'];?>" <?php if($rr['id_kategori_artikel']==$tt['id_kategori_artikel']){echo "selected"; } ?>><?php echo $tt['kategori_artikel'];?></option>
                            <?php
                                }
                            ?>
                        </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ckeditor_full" class="col-sm-2 control-label">Artikel</label>
                        <div class="col-sm-10">
                            <textarea id="ckeditor_full" name="artikel"><?php echo $rr['artikel'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="index.php?page=artikel" class="btn btn-danger">Kembali</a>
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