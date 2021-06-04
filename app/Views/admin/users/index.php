<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar User</h3>

                    <div class="card-tools ml-auto">
                        <a href="/admin/book/edit"><button type="button" class="btn btn-block btn-outline-primary">Insert New User</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama User</th>
                                <th>No. HP</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th style="width: 20%;">Alamat</th>
                                <th style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $user['user_name']; ?></td>
                                    <td><?= $user['user_phone_number']; ?></td>
                                    <td><?= $user['user_email']; ?></td>
                                    <td><?= $user['user_level']; ?></td>
                                    <td><?= $user['user_address']; ?></td>
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