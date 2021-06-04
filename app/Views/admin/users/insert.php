<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mt-3 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Insert Pengguna</h3>
                </div>
                <form action="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="namaPengguna">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="namaPengguna" placeholder="Masukkan Nama Pengguna">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nomorHpPengguna">No HP Pengguna</label>
                                    <input type="text" class="form-control" id="nomorHpPengguna" placeholder="Masukkan Nomor HP Pengguna">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Alamat Pengguna</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Level Pengguna</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="emailPengguna">Email Pengguna</label>
                                    <input type="email" class="form-control" id="emailPengguna" placeholder="Masukkan Email Pengguna">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="passwordPengguna">Password Pengguna</label>
                                    <input type="password" class="form-control" id="passwordPengguna" placeholder="Masukkan Password Pengguna">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>