<footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
<script src="assets/employer/plugins/jquery/jquery.min.js"></script>
<script src="assets/employer/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="assets/employer/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/employer/plugins/chart.js/Chart.min.js"></script>
<script src="assets/employer/plugins/sparklines/sparkline.js"></script>
<script src="assets/employer/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/employer/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="assets/employer/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="assets/employer/plugins/moment/moment.min.js"></script>
<script src="assets/employer/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/employer/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="assets/employer/plugins/summernote/summernote-bs4.min.js"></script>
<script src="assets/employer/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="assets/employer/dist/js/adminlte.js"></script>
<script src="assets/employer/dist/js/pages/dashboard.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>
</html>