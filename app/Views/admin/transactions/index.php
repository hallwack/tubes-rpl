<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Transaksi</h3>

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
                                <th>Tanggal Transaksi</th>
                                <th>User</th>
                                <th>Tipe Pembayaran</th>
                                <th>Total Transaksi</th>
                                <th style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($transactions as $transaction) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $transaction['transaction_date']; ?></td>
                                    <td><?= $transaction['user_name']; ?></td>
                                    <td><?= $transaction['payment_type']; ?></td>
                                    <td><?= $transaction['transaction_total']; ?></td>
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