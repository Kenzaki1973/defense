<?=$this->include('Employer/inc/header')?>;
<?= $this->include('Employer/inc/sidebar')?>;
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Job Post</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
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
                                            <?php foreach ($jobsposted as $jobs): ?>
                                            <?php if ($jobs['status'] != "Cancelled") { ?>
                                            <tr>
                                                <th><?= $jobs['occupation_title'] ?></th>
                                                <th><?= $jobs['required_no'] ?></th>
                                                <th><?= $jobs['location'] ?></th>
                                                <th><?= $jobs['dateposted'] ?></th>
                                                <th class="text-center"><a href="/jobdetails/<?= $jobs['vacancy_id']?>"><button class="bg-dark">View Details</button></a></th>
                                                </th>
                                                <th><?= $jobs['status'] ?></th>

                                                <?php if ($jobs['status'] == "Pending") { ?>
                                                <th class="text-center"> <a
                                                        href="<?= site_url('cancel_jobpost/') . $jobs['vacancy_id'] ?>"><button
                                                            class="bg-red">Cancel</button></a> </th>

                                                <?php } elseif ($jobs['status'] == "Approved") { ?>
                                                    <th class="text-center"> <a
                                                        href=""><button
                                                            class="bg-success   ">Edit</button></a> </th>

                                                <?php } elseif ($jobs['status'] == "Disapproved") { ?>


                                                <?php } ?>




                                        <?php } ?>

                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?=$this->include('Employer/inc/footer')?>
