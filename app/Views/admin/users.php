<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Pengguna</h3>

                    <div class="card-tools ml-auto">
                        <a href=""><button type="button" class="btn btn-block btn-outline-primary">Insert New Book</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama Pengguna</th>
                                <th style="width: 30%;">Alamat Pengguna</th>
                                <th>No. HP Pengguna</th>
                                <th>Email Pengguna</th>
                                <th style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Raihan Adam</td>
                                <td>Jl. Bojong Nangka IV RT01/08 No. 29 Jatirahayu, Pondok Melati, Kota Bekasi, Jawa Barat.</td>
                                <td>088888888888</td>
                                <td>raihanadam@gmail.com</td>
                                <td class="d-flex flex-column justify-content-center">
                                    <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-3">Delete</button>
                                </td>
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