<!DOCTYPE html>
<html lang="en">

<?= $this->include('admin/_partials/head'); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <?= $this->include('admin/_partials/preloader'); ?>

        <?= $this->include('admin/_partials/navbar'); ?>
        <?= $this->include('admin/_partials/sidebar'); ?>

        <!-- Content -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 mt-3 mx-auto">
                        <?= $this->renderSection('content'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('admin/_partials/footer'); ?>
    </div>

    <?= $this->include('admin/_partials/script'); ?>
</body>

</html>