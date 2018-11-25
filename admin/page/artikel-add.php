<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tambah Artikel</div>
            </div>
            <div class="panel-body">
                <form action="controller/act-artikel-add.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputJudulArtikel" class="col-sm-2 control-label">Judul Artikel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputJudulArtikel" name="judul_artikel" placeholder="Judul Artikel">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputKategoriArtikel" class="col-sm-2 control-label">Kategori Artikel</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputKategoriArtikel" name="id_kategori_artikel">
                            <option></option>
                            <?php
                                $r = $con->query("SELECT * FROM kategori_artikel");
                                foreach ($r as $rr) {
                            ?>
                                <option value="<?php echo $rr['id_kategori_artikel'];?>"><?php echo $rr['kategori_artikel'];?></option>
                            <?php
                                }
                            ?>
                        </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ckeditor_full" class="col-sm-2 control-label">Artikel</label>
                        <div class="col-sm-10">
                            <textarea id="ckeditor_full" name="artikel"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=artikel" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>