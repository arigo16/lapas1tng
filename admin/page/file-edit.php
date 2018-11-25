<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit File</div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputJudulFile" class="col-sm-2 control-label">Judul File</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputJudulFile" placeholder="Judul File">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputTipeFile" class="col-sm-2 control-label">Tipe File</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="inputTipeFile">
                            <option value="Document">Document .docx</option>
                            <option value="Excel">Excel .xlsx</option>
                            <option value="Powerpoint">Powerpoint .pptx</option>
                        </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputFile" class="col-sm-2 control-label">Artikel</label>
                        <div class="col-sm-10">
                            <input type="file" class="btn btn-default" id="inputFile">
                            <p class="help-block">
                                Ukuran jangan melebihi 5 Mb.
                            </p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=file" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>