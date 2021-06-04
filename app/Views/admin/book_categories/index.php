<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Kategori Buku</h3>

                    <div class="card-tools ml-auto">
                        <a href="/admin/book/edit"><button type="button" class="btn btn-block btn-outline-primary">Insert New Category</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Kategori Buku</th>
                                <th style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($bookCategories as $bookCategory) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $bookCategory['book_category']; ?></td>
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