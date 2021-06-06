<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mt-3 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Insert Pengguna</h3>
                </div>
                <form action="/admin/users/update/<?= $users['user_id']; ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $users['user_id'] ?>" />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Pengguna" value="<?= $users['user_name']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone_number">No HP Pengguna</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Masukkan Nomor HP Pengguna" value="<?= $users['user_phone_number']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="address">Alamat Pengguna</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter ..."><?= $users['user_address']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="level">Level Pengguna</label>
                                    <select class="form-control select2" id="level" name="level" style="width: 100%;">
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email Pengguna</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Pengguna" value="<?= $users['user_email']; ?>">
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