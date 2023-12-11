
  <?= $this->include('Employer/inc/header')?>

  <?= $this->include('Employer/inc/sidebar')?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post a Job Vacancy</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <div class="card card-primary">
              
              <form action="<?= site_url('/addjob') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" required placeholder="Enter company name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Occupation Title</label>
                    <input type="text" name="occupation_title" class="form-control" id="exampleInputPassword1" required placeholder="Enter occupation title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Required Number of Employees</label>
                    <input type="number" name="required_no" class="form-control" id="exampleInputPassword1" required placeholder="Enter required number of employees">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Salary</label>
                    <input type="number" name="salary" class="form-control" id="exampleInputPassword1" required placeholder="Enter salary">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Type of Job</label>
                    
                        <select name="per" required class="form-control">
                                <option value="" disabled selected>Select Category</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                        </select>
                  </div>
                       
                  <div class="form-group">
                    <label for="exampleInputPassword1">Per</label>
                    
                        <select name="per" required class="form-control">
                                <option value="" disabled selected>Select Category</option>
                                <option value="Hour">Hour</option>
                                <option value="Day">Day</option>
                                <option value="Week">Week</option>
                                <option value="15 Days">15 Days</option>
                                <option value="Month">Month</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" name="location" class="form-control" id="exampleInputPassword1" required placeholder="Enter location">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    
                    <select name="category" required class="form-control">
                                <option value="" disabled selected>Select Category</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="Project Management">Project Management</option>
                                <option value="Business Development">Business Development</option>
                                <option value="Sales & Communication">Sales & Communication</option>
                                <option value="Teaching & Education">Teaching & Education</option>
                                <option value="Design & Creative">Design & Creative</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Qualification/Work Experience</label>
                    <input type="text" name="qualification" class="form-control" id="exampleInputPassword1" required placeholder="Enter qualification/experience">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Job Description</label>
                    <input type="text" name="job_description" class="form-control" id="exampleInputPassword1" required placeholder="Enter job description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prefered Sex</label>
                    
                    <select name="prefered" required class="form-control">
                            <option value="" disabled selected>Select preferred sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Both">Both Male and Female</option>
                            </select>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?=$this->include('Employer/inc/footer')?>
