<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employer Details</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/employer/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">
    <?= $this->include('Admin/inc/sidebar')?>;
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <!-- Add your left navbar links here if needed -->
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- Add your navbar search form here if needed -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Employer Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <!-- Add any additional content header elements here if needed -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1">


                        </div>
                        <div class="col-md-10">
                            <!-- Employer Details Card -->
                            <div class="row">
                              <div class="col-md-3">
                                <div class="card card-primary">
                                  
                                      <img src="<?= "/assets/empimage/" . $viewEmp['empprofile'] ?>" height = "200px" width="245px" style="padding: 10px;" alt="Image">
                                  
                                </div>

                              </div>
                              <div class="col-md-9">
                                <div class="card card-primary">
                                  <div  class="card-body">
                           
                                    <p><strong>Full Name:</strong> <?=$viewEmp['full_name']?></p>
                                    <p><strong>Employer ID:</strong> <?=$viewEmp['employer_id']?></p>
                                    <p><strong>Company Name:</strong> <?=$viewEmp['company_name']?></p>
                                    <p><strong>Company Address:</strong> <?=$viewEmp['company_address']?></p>
                                    <p><strong>Address:</strong> <?=$viewEmp['address']?></p>
                                    <p><strong>Contact Number:</strong> <?=$viewEmp['contactnum']?></p>
                                    <p><strong>Email:</strong> <?=$viewEmp['email']?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="/employerregistration" class="btn btn-secondary">Back</a>

                                    <?php if ($viewEmp['status'] != 'Approved'): ?>
                                    <a href="<?= site_url('employer_approved/') . $viewEmp['emp_id'] ?>"
                                        style="float: right; margin-left: 15px;" class="btn btn-success">Approve</a>
                                    <?php endif; ?>
                                    <?php if ($viewEmp['status'] != 'Approved'): ?>
                                    <a href="<?= site_url('employer_decline/') . $viewEmp['emp_id'] ?>"
                                        style="float: right;" class="btn btn-danger">Decline</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                                    
                        

                              </div>

                            </div>
                            
                            <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Bootstrap 4 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/employer/dist/js/adminlte.min.js') ?>"></script>
    <!-- bs-custom-file-input -->
    <script src="<?= base_url('assets/employer/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>
    <!-- Your custom scripts go here if needed -->
</body>

</html>