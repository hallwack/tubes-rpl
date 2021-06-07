<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Buku</h3>

                    <div class="card-tools ml-auto">
                        <a href="/admin/books/create"><button type="button" class="btn btn-block btn-outline-primary">Insert New Book</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Judul Buku</th>
                                <th>Sampul Buku</th>
                                <th>Kategori</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th style="width: 25%;">Deskripsi</th>
                                <th style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($books as $book) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $book['book_name']; ?></td>
                                    <td><img src="/img/<?= $book['book_image']; ?>" alt="" style="width: 70%;"></td>
                                    <td><?= $book['book_category']; ?></td>
                                    <td><?= $book['book_author']; ?></td>
                                    <td><?= $book['book_publisher']; ?></td>
                                    <td><?= $book['book_description']; ?></td>
                                    <td class="d-flex flex-column justify-content-center">
                                        <a href="/admin/books/edit/<?= $book['book_id']; ?>" class="btn btn-sm btn-outline-success">Edit</a>
                                        <button data-toggle="modal" data-target="#modal-delete-book" data-book-id="<?= $book['book_id']; ?>" class="btn btn-delete-book btn-sm btn-outline-danger mt-3">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <form action="/admin/books/delete" method="post">
                <div class="modal fade" id="modal-delete-book">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Book</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure to delete this book?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <input type="hidden" name="book_id" class="book-id">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </form>
            <!-- /.modal -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>