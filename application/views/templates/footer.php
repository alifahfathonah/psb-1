<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center text-muted">
    Copyright &copy; 2020 <?= date('Y') == 2020 ? '' : ' - ' . date('Y') ?> SMP Tazkia Insani. All Rights Reserved.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('/') ?>assets/js/jquery-3.5.1.js"></script>
<script src="<?= base_url('/') ?>assets/js/popper.js"></script>
<script src="<?= base_url('/') ?>assets/js/bootstrap.min.js"></script>
<script>
    var id_role = <?= $this->session->userdata('id_role') ?>
</script>
<!-- apps -->
<script src="<?= base_url('/') ?>assets/templates/js/app-style-switcher.js"></script>
<script src="<?= base_url('/') ?>assets/templates/js/feather.min.js"></script>
<script src="<?= base_url('/') ?>assets/templates/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url('/') ?>assets/templates/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url('/') ?>assets/templates/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="<?= base_url('/') ?>assets/templates/extra-libs/c3/d3.min.js"></script>
<script src="<?= base_url('/') ?>assets/templates/extra-libs/c3/c3.min.js"></script>
<script src="<?= base_url('/') ?>assets/templates/libs/chartist/dist/chartist.min.js"></script>
<script src="<?= base_url('/') ?>assets/templates/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?= base_url('/') ?>assets/templates/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url('/') ?>assets/templates/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url('/') ?>assets/templates/js/pages/dashboards/dashboard1.min.js"></script>
<script src="<?= base_url('/') ?>assets/fontawesome/js/all.min.js"></script>
<script src="<?= base_url('/') ?>assets/datatables/datatables.js"></script>
<script src="<?= base_url('/') ?>assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('/') ?>assets/select2/js/select2.full.min.js"></script>
<script src="<?= base_url('/') ?>assets/js/yearpicker.js"></script>
<script src="<?= base_url('/') ?>assets/js/bootstrap-show-password.min.js"></script>
<script src="<?= base_url('/') ?>assets/js/md5.min.js"></script>

<!-- My JavaScript -->
<script src="<?= base_url('/') ?>assets/js/my_script.js"></script>
<script src="<?= base_url('/') ?>assets/js/my_swal.js"></script>

</body>

</html>