<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Transaksi</h3>
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
                                        <button type="button" id="detailTransaction" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#detailModal" data-name="<?= $detailTransactions['book_name']; ?>" data-quantity="<?= $detailTransactions['quantity_purchased']; ?>" data-total="<?= $detailTransactions['total']; ?>">Detail Transaksi</button>
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

    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">
                        Modal title
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                        <button type="button" id="detailTransaction" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#detailModal" data-name="<?= $detailTransactions['book_name']; ?>" data-quantity="<?= $detailTransactions['quantity_purchased']; ?>" data-total="<?= $detailTransactions['total']; ?>">Detail Transaksi</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" id="clear-cart" class="btn btn-primary">
                        Clear Cart
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>