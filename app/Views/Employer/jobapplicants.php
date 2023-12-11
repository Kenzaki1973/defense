<?=$this->include('Employer/inc/header')?>
        <?= $this->include('Employer/inc/sidebar')?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
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
                                            <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Resume</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($appdetails as $apps): ?>
                                           
                                            <tr>
                                                <th><?= $apps['app_fullname'] ?></th>
                                                <th><?= $apps['app_email'] ?></th>
                                                <th><?= $apps['app_contact'] ?></th>
                                                <th><?= $apps['app_address'] ?></th>
                                                <th><?= $apps['app_status'] ?></th>
                                                <th> <a href="<?="uploads/". $apps['app_resume'] ?>" target="uploads">View Resume</a>
                                                <th class="text-center"><a href="/appdetails/<?= $apps['application_id']?>"><button class="bg-dark">View Details</button></a></th>
                                                </th>
                                                





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
