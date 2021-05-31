<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Buku</h3>

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
                                <th>Judul Buku</th>
                                <th>Sampul Buku</th>
                                <th>Kategori</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th style="width: 30%;">Deskripsi</th>
                                <th style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>One Piece</td>
                                <td><img src="<?= base_url('tubes/assets/one-piece.png'); ?>" alt="" style="width: 70%;"></td>
                                <td>Shonen</td>
                                <td>Shonen Jump</td>
                                <td>Elex Mediatama</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate voluptatibus atque quia illum sunt ullam aspernatur. Ut hic soluta quia omnis ex qui harum nihil quaerat est obcaecati excepturi doloremque reiciendis, eum incidunt, placeat ipsam esse unde beatae id totam?</td>
                                <td class="d-flex flex-column justify-content-center">
                                    <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-3">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>One Piece</td>
                                <td><img src="<?= base_url('tubes/assets/initial-d.jpg'); ?>" alt="" style="width: 70%;"></td>
                                <td>Shonen</td>
                                <td>Shonen Jump</td>
                                <td>Elex Mediatama</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate voluptatibus atque quia illum sunt ullam aspernatur. Ut hic soluta quia omnis ex qui harum nihil quaerat est obcaecati excepturi doloremque reiciendis, eum incidunt, placeat ipsam esse unde beatae id totam?</td>
                                <td class="d-flex flex-column justify-content-center">
                                    <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-3">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>One Piece</td>
                                <td><img src="<?= base_url('tubes/assets/persona-5.jpg'); ?>" alt="" style="width: 70%;"></td>
                                <td>Shonen</td>
                                <td>Shonen Jump</td>
                                <td>Elex Mediatama</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate voluptatibus atque quia illum sunt ullam aspernatur. Ut hic soluta quia omnis ex qui harum nihil quaerat est obcaecati excepturi doloremque reiciendis, eum incidunt, placeat ipsam esse unde beatae id totam?</td>
                                <td class="d-flex flex-column justify-content-center">
                                    <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-3">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>One Piece</td>
                                <td><img src="<?= base_url('tubes/assets/nisekoi.jpg'); ?>" alt="" style="width: 70%;"></td>
                                <td>Shonen</td>
                                <td>Shonen Jump</td>
                                <td>Elex Mediatama</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate voluptatibus atque quia illum sunt ullam aspernatur. Ut hic soluta quia omnis ex qui harum nihil quaerat est obcaecati excepturi doloremque reiciendis, eum incidunt, placeat ipsam esse unde beatae id totam?</td>
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