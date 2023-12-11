<?= $this->include('User/inc/top') ?>

<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<?= $this->include('User/inc/header') ?>




<!-- Header End -->
<div class="container-xxl py-1 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <p class="display-3 text-white mb-3 animated slideInDown"><b>Application Status</b> </p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">

            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->



<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">

        <?php if (!empty($status)): ?>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">


                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-12 d-flex">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Salary</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Resume</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-left">
                    <?php foreach ($status as $cl): ?>

                                        <tr>
                                            <th><?php $formattedDate = date("F d, Y", strtotime($cl['app_created'])); ?><?= $formattedDate ?></th>
                                            <td><?= $cl['emp_company'] ?></td>
                                            <td><?= $cl['emp_title'] ?></td>
                                            <td><?= $cl['emp_salary'] ?> / <?= $cl['emp_per'] ?></td>
                                            <td><?= $cl['app_status'] ?></td>
                                            <th> <a href="<?="uploads/". $cl['app_resume'] ?>" target="uploads">View Resume</a>
                                            <td><button>Edit</button></td>
                                        </tr>
                    <?php endforeach; ?>

                                        
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <?php else: ?>
        <p class="text-center">No Data Found</p>
        <?php endif; ?>
        </div>
    </div>
</div>
<!-- Jobs End -->


<?= $this->include('User/inc/footer') ?>



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<?= $this->include('User/inc/end') ?>
</body>

</html>