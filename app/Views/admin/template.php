<!DOCTYPE html>
<html lang="en">

<?= view('admin/_partials/head'); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <?= view('admin/_partials/preloader'); ?>

        <?= view('admin/_partials/navbar'); ?>
        <?= view('admin/_partials/sidebar'); ?>

        <!-- Content -->
        <div class="content-wrapper">
        </div>

        <?= view('admin/_partials/footer'); ?>
    </div>

    <?= view('admin/_partials/script'); ?>
</body>

</html>