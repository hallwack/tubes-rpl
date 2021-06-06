<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mt-3 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Insert Payment Type</h3>
                </div>
                <form action="/admin/type-of-payments/<?= $typeOfPayments['type_of_payment_id']; ?>">
                    <input type="hidden" name="id" id="id" value="<?= $typeOfPayments['type_of_payment_id'] ?>" />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="paymentType">Tipe Pembayaran</label>
                                    <input type="text" class="form-control" id="paymentType" placeholder="Masukkan Nama Tipe Pembayaran" value="<?= $typeOfPayments['payment_type']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= previous_url(); ?>" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>