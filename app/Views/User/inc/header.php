        <!-- Navbar Start -->

        <?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index-2.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">JobEntry</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link <?php echo ($current_page == '/') ? 'active' : ''; ?>">Home</a>
                    <a href="/about" class="nav-item nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>">About</a>

                    <a href="/contact" class="nav-item nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact</a>


                    <?php  if(!session()->has('loggedUser')) { ?>
                        <a href="/log" class="nav-item nav-link">Sign In</a>
                        <a href="/reg" class="nav-item nav-link">Sign Up</a>

                    <?php } else {?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/accountprofile" class="dropdown-item">Profile</a>
                            <a href="/applicationstatus" class="dropdown-item">Application Status</a>
                            <a href="<?= site_url('usercontroller/logout'); ?>" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <?php  if(!session()->has('loggedUser')) { ?>

                <a href="/employerhome" class="btn btn-secondary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i
                        class="fa fa-arrow-right ms-3"></i></a>
                    <?php } else {?>
                        <a href="/joblist" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Find A Job<i
                        class="fa fa-search ms-3"></i></a>
                    <?php }?>


            </div>
        </nav>
        <!-- Navbar End -->