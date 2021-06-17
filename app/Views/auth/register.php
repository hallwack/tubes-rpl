<!DOCTYPE html>
<html lang="en">

<?= $this->include('auth/_partials/head'); ?>

<?php

$session = \Config\Services::session();
$errors = $session->getFlashdata('errors');

?>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <?php if ($errors != null) : ?>
                    <div class="alert alert-danger">
                        <h4 class="alert-heading">Kesalahan</h4>
                        <hr>
                        <p class="mb-3">
                            <?php foreach ($errors as $err) {
                                echo $err . '<br>';
                            }; ?>
                        </p>
                    </div>
                <?php endif; ?>
                <form action="/registerForm" method="post">
                    <?= csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="address" rows="3" placeholder="Address"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map-marked-alt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="phoneNumber" name="phoneNumber" class="form-control" placeholder="Phone Number">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="repeatPassword" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <?= $this->include('auth/_partials/script'); ?>
</body>

</html>