
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SPEED PHP</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<style>
    body {
  font-family: "Montserrat", sans-serif;
  background: #f7edd5;
}

.container {
  max-width: 900px;
}

a {
  display: inline-block;
  text-decoration: none;
}

input {
  outline: none !important;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 40px;
  font-weight: 700;
}

section#formHolder {
  padding: 50px 0;
}

.brand {
  padding: 20px;
  background: url(https://goo.gl/A0ynht);
  background-size: cover;
  background-position: center center;
  color: #fff;
  min-height: 540px;
  position: relative;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
  transition: all 0.6s cubic-bezier(1, -0.375, 0.285, 0.995);
  z-index: 9999;
}
.brand.active {
  width: 100%;
}
.brand::before {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.85);
  z-index: -1;
}
.brand a.logo {
  color: #f95959;
  font-size: 20px;
  font-weight: 700;
  text-decoration: none;
  line-height: 1em;
}
.brand a.logo span {
  font-size: 30px;
  color: #fff;
  transform: translateX(-5px);
  display: inline-block;
}
.brand .heading {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  transition: all 0.6s;
}
.brand .heading.active {
  top: 100px;
  left: 100px;
  transform: translate(0);
}
.brand .heading h2 {
  font-size: 70px;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 0;
}
.brand .heading p {
  font-size: 15px;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: 2px;
  white-space: 4px;
  font-family: "Raleway", sans-serif;
}
.brand .success-msg {
  width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-top: 60px;
}
.brand .success-msg p {
  font-size: 25px;
  font-weight: 400;
  font-family: "Raleway", sans-serif;
}
.brand .success-msg a {
  font-size: 12px;
  text-transform: uppercase;
  padding: 8px 30px;
  background: #f95959;
  text-decoration: none;
  color: #fff;
  border-radius: 30px;
}
.brand .success-msg p, .brand .success-msg a {
  transition: all 0.9s;
  transform: translateY(20px);
  opacity: 0;
}
.brand .success-msg p.active, .brand .success-msg a.active {
  transform: translateY(0);
  opacity: 1;
}

.form {
  position: relative;
}
.form .form-peice {
  background: #fff;
  min-height: 480px;
  margin-top: 30px;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
  color: #bbbbbb;
  padding: 30px 0 60px;
  transition: all 0.9s cubic-bezier(1, -0.375, 0.285, 0.995);
  position: absolute;
  top: 0;
  left: -30%;
  width: 130%;
  overflow: hidden;
}
.form .form-peice.switched {
  transform: translateX(-100%);
  width: 100%;
  left: 0;
}
.form form {
  padding: 0 40px;
  margin: 0;
  width: 70%;
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%, -50%);
}
.form form .form-group {
  margin-bottom: 5px;
  position: relative;
}
.form form .form-group.hasError input {
  border-color: #f95959 !important;
}
.form form .form-group.hasError label {
  color: #f95959 !important;
}
.form form label {
  font-size: 12px;
  font-weight: 400;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
  transform: translateY(40px);
  transition: all 0.4s;
  cursor: text;
  z-index: -1;
}
.form form label.active {
  transform: translateY(10px);
  font-size: 10px;
}
.form form label.fontSwitch {
  font-family: "Raleway", sans-serif !important;
  font-weight: 600;
}
.form form input:not([type=submit]) {
  background: none;
  outline: none;
  border: none;
  display: block;
  padding: 10px 0;
  width: 100%;
  border-bottom: 1px solid #eee;
  color: #444;
  font-size: 15px;
  font-family: "Montserrat", sans-serif;
  z-index: 1;
}
.form form input:not([type=submit]).hasError {
  border-color: #f95959;
}
.form form span.error {
  color: #f95959;
  font-family: "Montserrat", sans-serif;
  font-size: 12px;
  position: absolute;
  bottom: -20px;
  right: 0;
  display: none;
}
.form form input[type=password] {
  color: #f95959;
}
.form form .CTA {
  margin-top: 30px;
}
.form form .CTA input {
  font-size: 12px;
  text-transform: uppercase;
  padding: 5px 30px;
  background: #f95959;
  color: #fff;
  border-radius: 30px;
  margin-right: 20px;
  border: none;
  font-family: "Montserrat", sans-serif;
}
.form form .CTA a.switch {
  font-size: 13px;
  font-weight: 400;
  font-family: "Montserrat", sans-serif;
  color: #bbbbbb;
  text-decoration: underline;
  transition: all 0.3s;
}
.form form .CTA a.switch:hover {
  color: #f95959;
}

footer {
  text-align: center;
}
footer p {
  color: #777;
}
footer p a, footer p a:focus {
  color: #b8b09f;
  transition: all 0.3s;
  text-decoration: none !important;
}
footer p a:hover, footer p a:focus:hover {
  color: #f95959;
}

@media (max-width: 768px) {
  .container {
    overflow: hidden;
  }

  section#formHolder {
    padding: 0;
  }
  section#formHolder div.brand {
    min-height: 200px !important;
  }
  section#formHolder div.brand.active {
    min-height: 100vh !important;
  }
  section#formHolder div.brand .heading.active {
    top: 200px;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  section#formHolder div.brand .success-msg p {
    font-size: 16px;
  }
  section#formHolder div.brand .success-msg a {
    padding: 5px 30px;
    font-size: 10px;
  }
  section#formHolder .form {
    width: 80vw;
    min-height: 500px;
    margin-left: 10vw;
  }
  section#formHolder .form .form-peice {
    margin: 0;
    top: 0;
    left: 0;
    width: 100% !important;
    transition: all 0.5s ease-in-out;
  }
  section#formHolder .form .form-peice.switched {
    transform: translateY(-100%);
    width: 100%;
    left: 0;
  }
  section#formHolder .form .form-peice > form {
    width: 100% !important;
    padding: 60px;
    left: 50%;
  }
}
@media (max-width: 480px) {
  section#formHolder .form {
    width: 100vw;
    margin-left: 0;
  }

  h2 {
    font-size: 50px !important;
  }
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
   <section id="formHolder">

      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">
            <a href="#" class="logo">SPEEDPHP<span></span></a>

            <div class="heading">
               <h2>lkpd</h2>
               <p>OOP PHP</p>
            </div>

            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>


         <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
               <form class="login-form" action="home/index/homepage.php" method="post">
                  <div class="form-group">
                     <label for="loginemail">Email Adderss</label>
                     <input type="email" name="loginemail" id="loginemail" required>
                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Login">
                     <a href="home/index/homepage.php" class="switch">I'm New</a>
                  </div>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice">
               <form class="signup-form" action="#" method="post">

                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="username" id="name" class="name">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Adderss</label>
                     <input type="email" name="emailAdress" id="email" class="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="phone">Phone Number - <small>Optional</small></label>
                     <input type="text" name="phone" id="phone">
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Signup Now" id="submit">
                     <a href="home/index/homepage.php" class="switch">I have an account</a>
                  </div>
               </form>
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>
<script>
  
    /global $, document, window, setTimeout, navigator, console, location/
$(document).ready(function () {

    'use strict';

    var usernameError = true,
        emailError    = true,
        passwordError = true,
        passConfirm   = true;

    // Detect browser for css purpose
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
        $('.form form label').addClass('fontSwitch');
    }

    // Label effect
    $('input').focus(function () {

        $(this).siblings('label').addClass('active');
    });

    // Form validation
    $('input').blur(function () {

        // User Name
        if ($(this).hasClass('name')) {
            if ($(this).val().length === 0) {
                $(this).siblings('span.error').text('Please type your full name').fadeIn().parent('.form-group').addClass('hasError');
                usernameError = true;
            } else if ($(this).val().length > 1 && $(this).val().length <= 6) {
                $(this).siblings('span.error').text('Please type at least 6 characters').fadeIn().parent('.form-group').addClass('hasError');
                usernameError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                usernameError = false;
            }
        }
        // Email
        if ($(this).hasClass('email')) {
            if ($(this).val().length == '') {
                $(this).siblings('span.error').text('Please type your email address').fadeIn().parent('.form-group').addClass('hasError');
                emailError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                emailError = false;
            }
        }

        // PassWord
        if ($(this).hasClass('pass')) {
            if ($(this).val().length < 8) {
                $(this).siblings('span.error').text('Please type at least 8 charcters').fadeIn().parent('.form-group').addClass('hasError');
                passwordError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                passwordError = false;
            }
        }

        // PassWord confirmation
        if ($('.pass').val() !== $('.passConfirm').val()) {
            $('.passConfirm').siblings('.error').text('Passwords don\'t match').fadeIn().parent('.form-group').addClass('hasError');
            passConfirm = false;
        } else {
            $('.passConfirm').siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
            passConfirm = false;
        }

        // label effect
        if ($(this).val().length > 0) {
            $(this).siblings('label').addClass('active');
        } else {
            $(this).siblings('label').removeClass('active');
        }
    });


    // form switch
    $('a.switch').click(function (e) {
        $(this).toggleClass('active');
        e.preventDefault();

        if ($('a.switch').hasClass('active')) {
            $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
        } else {
            $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
        }
    });


    // Form submit
    $('form.signup-form').submit(function (event) {
        event.preventDefault();

        if (usernameError == true || emailError == true || passwordError == true || passConfirm == true) {
            $('.name, .email, .pass, .passConfirm').blur();
        } else {
            $('.signup, .login').addClass('switched');

            setTimeout(function () { $('.signup, .login').hide(); }, 700);
            setTimeout(function () { $('.brand').addClass('active'); }, 300);
            setTimeout(function () { $('.heading').addClass('active'); }, 600);
            setTimeout(function () { $('.success-msg p').addClass('active'); }, 900);
            setTimeout(function () { $('.success-msg a').addClass('active'); }, 1050);
            setTimeout(function () { $('.form').hide(); }, 700);
        }
    });

    // Reload page
    $('a.profile').on('click', function () {
        location.reload(true);
    });


});
</script>

</body>
</html>
