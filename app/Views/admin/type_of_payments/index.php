<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Tipe Pembayaran</h3>

                    <div class="card-tools ml-auto">
                        <a href="/admin/type-of-payments/create"><button type="button" class="btn btn-block btn-outline-primary">Insert New Payment Type</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Tipe Pembayaran</th>
                                <th style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($payments as $payment) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $payment['payment_type']; ?></td>
                                    <td class="d-flex flex-column justify-content-center">
                                        <a href="/admin/type-of-payments/edit/<?= $payment['type_of_payment_id']; ?>" class="btn btn-sm btn-outline-success">Edit</a>
                                        <button data-toggle="modal" data-target="#modal-delete-type-of-payment" data-type-of-payment-id="<?= $payment['type_of_payment_id']; ?>" class="btn btn-delete-type-of-payment btn-sm btn-outline-danger mt-3">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <form action="/admin/type-of-payments/delete/<?= $payment['type_of_payment_id']; ?>" method="post">
                <div class="modal fade" id="modal-delete-type-of-payment">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Payment Type</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure to delete this payment type?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <input type="hidden" name="user_id" class="type-of-payment-id">
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