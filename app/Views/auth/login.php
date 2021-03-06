<!DOCTYPE html>
<html lang="en">

<?= $this->include('auth/_partials/head'); ?>

<?php

$session = \Config\Services::session();
$errors = $session->getFlashdata('errors');

?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
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
                <form action="/loginForm" method="post">
                    <?= csrf_field(); ?>
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
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                        <div class="col-8">
                            <a href="/register" class="btn btn-primary btn-block">Register Now</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <?= $this->include('auth/_partials/script'); ?>
</body>

</html>