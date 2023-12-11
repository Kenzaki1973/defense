<?=$this->include('Admin/inc/header')?>;
<?= $this->include('Admin/inc/sidebar')?>;

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employer Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employer Registration</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <div class="card-header">

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0 bg-white">
                <table class="table table-hover text-nowrap">
                  <thead><thead>
                  <tr>
                    <th>Employer ID</th>
                    <th>Full Name</th>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                       <?php foreach ($myregemp as $reg): ?>
                        <?php if ($reg['status'] != "Decline") { ?>
                        <tr>
                        <th><?= $reg['employer_id'] ?></th>
                    <th><?= $reg['full_name'] ?></th>
                    <th><?= $reg['position'] ?></th>
                    <th><?= $reg['company_name'] ?></th>
                    <th><?= $reg['status'] ?></th>
                    <th><img src="<?= "assets/empimage/" . $reg['empprofile'] ?>" height = "100px" width="100px" alt="Image"></th>
                    <th class="text-center"><a href="/empdetails/<?= $reg['emp_id']?>"><button class="bg-dark">View Details</button></a></th>
                    <?php } ?>
                    <?php if ($reg['status'] == "Decline") { ?>
                        <tr>
                        <th><?= $reg['employer_id'] ?></th>
                    <th><?= $reg['full_name'] ?></th>
                    <th><?= $reg['position'] ?></th>
                    <th><?= $reg['company_name'] ?></th>
                    <th><?= $reg['status'] ?></th>
                    <th><img src="<?= $reg['empprofile'] ?>" alt="Image"></th>
                
                    <?php } ?>
                  </tr>
            
                    <?php endforeach; ?>
                 
                  </tbody>
                </table>

          
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/admin/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
