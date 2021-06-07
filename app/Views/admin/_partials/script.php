<!-- jQuery -->
<script src="<?= base_url('themes'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('themes'); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('themes'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('themes'); ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('themes'); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('themes'); ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('themes'); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('themes'); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('themes'); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('themes'); ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('themes'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('themes'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('themes'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('themes'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('themes'); ?>/dist/js/adminlte.js"></script>

<script>
    $(function() {
        $('.select2').select2();
    })

    $(document).ready(function() {
        $(document).on('click', "#detailTransactions", function() {
            var name = $(this).data('name');
            var quantity = $(this).data('quantity');
            var total = $(this).data('total');
            $('#name').text(name);
            $('#quantity').text(quantity);
            $('#total').text(total);
        })
    })

    $('.btn-delete-user').on('click', function() {
        const id = $(this).data('user-id');
        $('.user-id').val(id);
    })

    $('.btn-delete-category').on('click', function() {
        const id = $(this).data('category-id');
        $('.category-id').val(id);
    })

    $('.btn-delete-type-of-payment').on('click', function() {
        const id = $(this).data('type-of-payment-id');
        $('.type-of-payment-id').val(id);
    })

    $('.btn-delete-book').on('click', function() {
        const id = $(this).data('book-id');
        $('.book-id').val(id);
    })
</script>