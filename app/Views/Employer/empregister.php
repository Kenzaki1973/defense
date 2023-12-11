<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PesoLink - Employer Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/registeradem/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/registeradem/css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(assets/loginadem/images/bg.jpg);">

    <div class="main">

        <h1>Sign up</h1>
        <div class="container">
            <div class="sign-up-content">
               
                    <h2>Employer Registration</h2>
           
        
                    <form action="<?= site_url('/registeremployer') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-textbox">
                        <input type="text" name="employer_id" placeholder="Employer ID Number" />
                    </div>



                    <div class="form-textbox">
                        <input type="text" name="company_name" id="email" placeholde r="Company Name"/>
                    </div>

                    <div class="form-textbox">
                        <input type="text" name="company_address" id="pass" placeholder="Company Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="full_name" id="pass" placeholder="Full Name" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="position" id="pass" placeholder="Position" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="address" id="pass" placeholder="Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="contactnum" id="pass" placeholder="Contact Number" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="email" id="pass" placeholder="Email Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="password" name="password" id="pass" placeholder="Password" />
                    </div>

                    
                    <div class="form-textbox">
                        <input type="file" name="empprofile" placeholder="Employer Profile"/>
                    </div>

                   <br>

                    <div class="form-textbox text-center">
                        <button type="submit" class="submit" id="submit">Register Account</button>
                    </div>
                </form>
                <br>

                <p class="loginhere">
                    Already have an account ?<a href="<?= site_url('/employerlogin') ?>" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="assets/registeradem/vendor/jquery/jquery.min.js"></script>
    <script src="assets/registeradem/js/main.js"></script>

    <script>
function switchForm(formName) {
    if (formName === 'user') {
        document.getElementById('userForm2').style.display = 'block';
        document.getElementById('employerForm2').style.display = 'none';
    } else if (formName === 'employer') {
        document.getElementById('userForm2').style.display = 'none';
        document.getElementById('employerForm2').style.display = 'block';
    }
}
</script>

<form action="loginemployer.php" method="post" id="employerForm2" style="display: none;">
            <!-- Employer Form -->
            <h2>Employer Login</h2>
            <!-- Add your form fields and input elements here for the employer -->
            <div class="cfield">
                <input type="text" placeholder="Full Name" name="full_name" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="Password" name="password" />
                <i class="la la-key"></i>
            </div>
            <a href="#" title="">Forgot Password?</a>
            <button type="submit">Login</button>
        </form>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>