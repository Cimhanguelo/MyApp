<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PainDiary</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="assets/css/landy-iconfont.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
    <!-- stylesheet-->
    <link rel="stylesheet" href="assets/css/style.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">

  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top"><a class="logo" href="index.html">
        <img src="assets/images/pain_diary_logo.png" alt="paindiary" height="70">
      </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
          </ul>
          <div class="CTA"><a href="#" data-toggle="modal" data-target="#exampleModallogin" class="btn btn-outline-primary" style="margin-left: 20px; border-radius: 2px;">Login</a></div>
          <div class="navbar-text">   
            <!-- Button trigger modal--><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary navbar-btn btn-shadow" style="border-radius: 2px;">Register</a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Sign up Modal-->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Sign Up</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">??</span></button>
          </div>
          <div class="modal-body">
            <form id="signupform" method="post" action="register.php">
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name" id="fullname" required>
              </div>
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" placeholder="User Name" id="username" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" placeholder="Email Address" id="email" required>
              </div>
              <div class="form-group">
                <label for="email">Password</label>
                <input type="password" name="password" placeholder="Password" id="password" required>
              </div>
               <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4" >
                  <input 
                     class="form-check-input me-2"
                     type="checkbox"
                     value=""
                     id="form2Example3"
                     unchecked
                     required
                  />
                  <label class="form-check-label" for="form2Example3">
                    <br> I Agree to the Terms and Conditions
                  </label>
                </div>
              <div class="form-group">
                <button type="submit" class="submit btn btn-primary btn-shadow" style="border-radius: 2px;">Signup</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

     <!-- Sign In Modal-->
     <div id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Sign In</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">??</span></button>
          </div>
          <div class="modal-body">
            <form id="signupform" method="post" action="signin.php">
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" placeholder="User Name" id="username">
              </div>
              <div class="form-group">
                <label for="email">Password</label>
                <input type="password" name="password" placeholder="Password" id="password">
              </div>
              <div class="form-group">
                <button type="submit" class="submit btn btn-primary btn-shadow " style="border-radius: 2px;">Login</button>
              </div>
              <div class="form-group">
                <a href="password-reset/">reset password</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <section id="hero" class="hero hero-home bg-black">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-6">
            <div class="contact-box ml-3">
                <div class="alert alert-danger">
                    <h4 class="font-weight-light mt-2"><?php echo $error; ?>
                </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><img src="assets/images/contact.jpg" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>
    
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
    <footer class="main-footer bg-gray">
      <div class="container">
        <div class="row">
          <div class="copyrights">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <p>&copy; 2022 Bella. All rights reserved.      </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/js/front.js"></script>
    <!---->
  </body>
</html>