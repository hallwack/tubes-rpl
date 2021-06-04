<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mt-3 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Insert Buku</h3>
                </div>
                <form action="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="bookName">Judul Buku</label>
                                    <input type="text" class="form-control" id="bookName" placeholder="Masukkan Judul Buku">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="bookImage">Sampul Buku</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="bookImage">
                                        <label class="custom-file-label" for="bookImage">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="bookAuthor">Pengarang Buku</label>
                                    <input type="text" class="form-control" id="bookAuthor" placeholder="Masukkan Pengarang Buku">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="bookPublisher">Penerbit Buku</label>
                                    <input type="text" class="form-control" id="bookPublisher" placeholder="Masukkan Penerbit Buku">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="bookDescription">Description</label>
                                    <textarea id="bookDescription" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>