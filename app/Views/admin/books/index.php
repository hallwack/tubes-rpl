<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Buku</h3>

                    <div class="card-tools ml-auto">
                        <a href="/admin/book/edit"><button type="button" class="btn btn-block btn-outline-primary">Insert New Book</button></a>
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
                            <?php foreach ($books as $book) : ?>
                                <tr>
                                    <td>1.</td>
                                    <td><?= $book['book_name']; ?></td>
                                    <td><img src="/tubes/assets/<?= $book['book_image']; ?>" alt="" style="width: 70%;"></td>
                                    <td>Shonen</td>
                                    <td><?= $book['book_author']; ?></td>
                                    <td><?= $book['book_publisher']; ?></td>
                                    <td><?= $book['book_description']; ?></td>
                                    <td class="d-flex flex-column justify-content-center">
                                        <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger mt-3">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>