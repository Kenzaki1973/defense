<?= $this->include('User/inc/top') ?>


<?= $this->include('User/inc/header') ?>


<!-- Header End -->
<div class="container-xxl py-1 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Easy Search for A Job You Want</h1>
        <nav aria-label="breadcrumb">

        </nav>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Apply For A Job You Want</h1>
                <hr>
                <div class="card-body border border-dark text-dark"
                    style="background-color: white; border-radius: 5px; ">
                    <form action="<?php echo site_url('applynow');?>" method="post" class="signup-form"
                        enctype="multipart/form-data">
                        <p><strong>Company Name:</strong> <?=$viewde['company_name']; ?> <br>
                            <input type="hidden" name="job_id" value="<?=$viewde['vacancy_id']; ?>">
                            <input type="hidden" name="emp_company" value="<?=$viewde['company_name']; ?>">
                            <strong>Occupation Title:</strong> <?=$viewde['occupation_title']; ?> <br>
                            <input type="hidden" name="emp_title" value="<?=$viewde['occupation_title']; ?>">
                            <strong>Required number of applicant:</strong> <?=$viewde['required_no'];?> <br>
                            <strong>Location:</strong> <?=$viewde['location'];?> <br>
                            <input type="hidden" name="emp_location" value="<?=$viewde['location']; ?>">
                            <strong>Qualification:</strong> <?=$viewde['qualification'];?> <br>
                            <strong>Job Description:</strong> <?=$viewde['job_description'];?> <br>
                            <strong>Prefered Sex:</strong> <?=$viewde['prefered'];?> <br>
                            <strong>Type of Job:</strong> <?=$viewde['job_type'];?> <br>
                            <strong>Category:</strong> <?=$viewde['category'];?> <br>
                            <strong>Salary:</strong> <?=$viewde['salary'];?> / <?=$viewde['per'];?> <br>
                            <input type="hidden" name="emp_salary" value="<?=$viewde['salary']; ?>">
                            <input type="hidden" name="emp_per" value="<?=$viewde['per']; ?>">
                            <strong>Date Posted:</strong> <?=$viewde['dateposted'];?>
                        </p>
                        <hr>

                        <div class="form-textbox">
                            <label for="resumeko">Upload your resume</label>
                            <input type="file" name="resumeko" id="resumeko" class="form-control mb-3" accept=".pdf"
                                required>
                        </div>
                        <div class="form-textbox">
                            <input type="submit" class="submit" value="Upload" />
                        </div>
                    </form>


                </div>
            </div>


            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="<?= base_url('/assets/user/img/about-1.jpg') ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="<?= base_url('/assets/user/img/about-2.jpg') ?>" style="width: 85%;; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="<?= base_url('/assets/user/img/about-3.jpg') ?>" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="<?= base_url('/assets/user/img/about-4.jpg') ?>">
                            </div>
                        </div>
                    </div>

        </div>
    </div>
</div>
<!-- About End -->



<?= $this->include('User/inc/footer') ?>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<?= $this->include('User/inc/end') ?>
</body>

</html>