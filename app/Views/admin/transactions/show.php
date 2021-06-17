<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Transaksi ke-<?= $transactions['transaction_id']; ?></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama Buku</th>
                                <th>Banyak Buku</th>
                                <th>Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($detailTransactions as $detail) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $detail['book_name']; ?></td>
                                    <td><?= $detail['quantity_purchased']; ?> Buah</td>
                                    <td>Rp <?= number_format($detail['total_purchase']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="3"><strong>Total Pembelian</strong></td>
                                <td>Rp <?= number_format($transactions['transaction_total']); ?></td>
                            </tr>
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