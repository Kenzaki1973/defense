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
<div class="container-xxl py-1 bg-dark page-header">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job Portal</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">

            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">
        <form id="search-form" class="row g-2">
    <div class="col-md-8">
        <input type="text" id="search-input" placeholder="Type any keyword..." class="form-control border-0" />
    </div>
    <div class="col-md-4">
        <button type="submit" id="search-button" class="btn btn-dark border-0 w-100">Search</button>
    </div>
</form>
        </div>
    </div>
</div>


<!-- Jobs Start -->
<div class="container-xxl py-1">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
           
            <div class="tab-content">
                <?php if (!empty($all)): ?>

                <div class="tab-pane fade show p-0 active">
                    <?php foreach ($all as $lf): ?>

                    <div class="job-item p-4 mb-4">

                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3"><?= $lf['occupation_title'] ?></h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-landmark text-primary me-2"></i><?= $lf['company_name'] ?></span>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i><?= $lf['location'] ?></span>
                                    <span class="text-truncate me-3"><i
                                            class="far fa-clock text-primary me-2"></i><?= $lf['job_type'] ?></span>
                                    <span class="text-truncate me-3"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i><?= $lf['salary'] ?> /
                                        <?= $lf['per'] ?> </span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href="#"><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary"
                                        href="<?= site_url('applydetails/') . $lf['vacancy_id'] ?>">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Posted:
                                    <?php $formattedDate = date("F d, Y", strtotime($lf['dateposted'])); ?><?= $formattedDate ?></small>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <br>
                <hr>
                <p class="text-center text-dark">No Part Time Vacancies</p>
                <?php endif; ?>
                
            </div>
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

<script>
document.addEventListener("DOMContentLoaded", function () {
    const searchButton = document.getElementById("search-button");
    const searchInput = document.getElementById("search-input");
    const jobSections = document.querySelectorAll(".job-item");

    searchButton.addEventListener("click", function (event) {
        event.preventDefault();
        performSearch();
    });

    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase().trim();

        jobSections.forEach((jobItem) => {
            const jobTitle = jobItem.querySelector("h5").textContent.toLowerCase();
            const companyName = jobItem.querySelector(".text-truncate:nth-child(2)").textContent.toLowerCase();
            const location = jobItem.querySelector(".text-truncate:nth-child(3)").textContent.toLowerCase();
            const jobType = jobItem.querySelector(".text-truncate:nth-child(4)").textContent.toLowerCase();
            const salary = jobItem.querySelector(".text-truncate:nth-child(5)").textContent.toLowerCase();

            const isMatch = jobTitle.includes(searchTerm) || companyName.includes(searchTerm) ||
                location.includes(searchTerm) || jobType.includes(searchTerm) || salary.includes(searchTerm);

            jobItem.style.display = isMatch ? "block" : "none";
        });
    }
});


</script>

</html>