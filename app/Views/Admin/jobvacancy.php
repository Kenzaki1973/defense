<?=$this->include('Admin/inc/header')?>;
<?= $this->include('Admin/inc/sidebar')?>;

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Job Vacancy</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Job Vacancy</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                                <th>Occupation Title</th>
                                                <th>Required Number of Employees</th>
                                                <th>Location</th>
                                                <th>Date Posted</th>
                                                <th></th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                  </thead>
                  <tbody>
                                            <?php foreach ($jobvacants as $vacants): ?>
                                            <?php if ($vacants['status'] != "Cancelled") { ?>
                                            <tr>
                                                <th><?= $vacants['occupation_title'] ?></th>
                                                <th><?= $vacants['required_no'] ?></th>
                                                <th><?= $vacants['location'] ?></th>
                                                <th><?= $vacants['dateposted'] ?></th>
                                                <th class="text-center"><a href="/vacancydetails/<?= $vacants['vacancy_id']?>"><button class="bg-dark">View Details</button></a>
                                               
                                                </th>
                                                <th><?= $vacants['status'] ?></th>

                                                <?php if ($vacants['status'] == "Pending") { ?>
                                                <th class="text-center"> <a
                                                        href="<?= site_url('cancel_jobpost/') . $vacants['vacancy_id'] ?>"><button
                                                            class="bg-red">Cancel</button></a> </th>

                                                <?php } elseif ($vacants['status'] == "Approved") { ?>

                                                <?php } elseif ($vacants['status'] == "Disapproved") { ?>


                                                <?php } ?>






                                                <!-- <td class="text-center" style="cursor: pointer; font-size: 15px;">
                                            <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<= $jobs['id'] ?>">
                                                <i class="fas fa-trash"></i> -- Add the delete button icon here --
                                            </a>
                                        </td> -->


                                        <?php } ?>

                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
