<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mt-3 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Insert Buku</h3>
                </div>
                <form action="/admin/books/save" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Judul Buku</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Judul Buku">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="image">Sampul Buku</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category">Kategori</label>
                                    <select class="form-control select2" id="category" name="category" style="width: 100%;">
                                        <?php foreach ($books as $book) : ?>
                                            <option value="<?= $book['book_category_id']; ?>"><?= $book['book_category']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="author">Pengarang Buku</label>
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Masukkan Pengarang Buku">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="publisher">Penerbit Buku</label>
                                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Masukkan Penerbit Buku">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="price">Harga Buku</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Masukkan Harga Buku">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
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