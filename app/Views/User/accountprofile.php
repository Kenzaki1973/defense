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
        <p class="display-3 text-white mb-3 animated slideInDown"><b>Profile Account</b> </p>
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

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">


                    <div class="job-item p-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 mb-4">
                                <div class="card">
                                    <div class="card-body" style="padding: 0px;">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="assets/user/img/com-logo-5.jpg" alt=""
                                            style="width: 200px; height: 200px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title" style="float: left;">Personal Information</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Middle Name">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" placeholder="Ext.">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Birthday">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Age">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Sex">
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Contact Number">
                                            </div>
                                        </div><br>
                                        <h5 class="card-title" style="float: left;">Educational Attainment</h5>
                                        <hr>
                                        <p style="float: left;">Elementary</p>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="School">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="School Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Year Graduated">
                                            </div>

                                        </div><br>
                                        <p style="float: left;">Junior High School</p>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="School">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="School Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Year Graduated">
                                            </div>

                                        </div><br>
                                        <p style="float: left;">Senior High School</p>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="School">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="School Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Year Graduated">
                                            </div>

                                        </div><br>
                                        <p style="float: left;">College</p>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="School">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="School Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Year Graduated">
                                            </div>

                                        </div><br>
                                        <h5 class="card-title" style="float: left;">Work Experience</h5>
                                        <hr><br>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="Job">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Description">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Duration">
                                            </div>

                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="Job">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Description">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Duration">
                                            </div>

                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" placeholder="Job">
                                            </div>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Description">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Duration">
                                            </div>

                                        </div><br>

                                        <h5 class="card-title" style="float: left;">Character References</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Company">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Company">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Company">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <br>
                                        <h5 class="card-title" style="float: left;">Objectives</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>

                                        </div>
                                        <br>
                                        <h5 class="card-title" style="float: left;">Skills</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>

                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Employer">
                                            </div>

                                        </div>
                                        <br>
                                        <button style="float: right;" type="submit">Save</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>


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

</html>