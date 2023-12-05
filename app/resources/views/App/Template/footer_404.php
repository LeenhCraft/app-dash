
<!-- / Layout wrapper -->
<script>
    const base_url = "<?php echo base_url(); ?>";
</script>

<!-- Core JS -->
<script src="/js/app/plugins/jquery.min.js"></script>
<script src="/js/app/plugins/popper.min.js"></script>
<script src="/js/app/plugins/bootstrap.min.js"></script>

<script src="/js/app/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/js/app/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="/js/app/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="/js/app/plugins/main.js"></script>

<!-- Page JS -->
<!-- <script src="/js/plugins/template_app/dashboards-analytics.js"></script> -->
<!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->

<script src="/js/app/plugins/jquery.dataTables.min.js"></script>
<script src="/js/app/plugins/dataTables.bootstrap.min.js"></script>
<script src="/js/app/plugins/sweetalert2.all.min.js"></script>
<script src="/js/app/plugins/select2.min.js"></script>
<script src="/js/template-customizer.js"></script>
<script>
    var divLoading = $("#divLoading");
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        showCloseButton: true,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
</script>
<?php
if (isset($data['js']) && !empty($data['js'])) {
    for ($i = 0; $i < count($data['js']); $i++) {
        echo '<script src="' . base_url() . $data['js'][$i] . '"></script>';
    }
}
require_once __DIR__ . '/customizer.php';
?>
</body>

</html>