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
<div class="container-xxl py-1 bg-dark page-header mb-1">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
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
        <?php
        if (isset($category)) {
            echo '<h1 class="text-center mb-2 wow fadeInUp">' . htmlspecialchars($category) . '</h1>';
        }
        ?>
        <hr>
        <?php if (!empty($catlist)): ?>

        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <?php foreach ($catlist as $cl): ?>

                    <div class="job-item p-4 mb-4">

                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3"><?= $cl['occupation_title'] ?></h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-landmark text-primary me-2"></i><?= $cl['company_name'] ?></span>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i><?= $cl['location'] ?></span>
                                    <span class="text-truncate me-3"><i
                                            class="far fa-clock text-primary me-2"></i><?= $cl['job_type'] ?></span>
                                    <span class="text-truncate me-3"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i><?= $cl['salary'] ?> /
                                        <?= $cl['per'] ?> </span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href="#"><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="<?= site_url('applydetails/') . $cl['vacancy_id'] ?>">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Posted:
                                    <?php $formattedDate = date("F d, Y", strtotime($cl['dateposted'])); ?><?= $formattedDate ?></small>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>

                </div>


            </div>
        </div>
        <?php else: ?>
        <p class="text-center">No Available Vacancy</p>
        <?php endif; ?>
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