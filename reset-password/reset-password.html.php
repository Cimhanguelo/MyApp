<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Reset</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
   <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->../
    <link rel="stylesheet" href="../assets/css/landy-iconfont.css">
    <!-- Google fonts - Open Sans../-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
     <!-- owl carousel-->
     <link rel="stylesheet" href="../assets/vendor/owl.carousel/assets/owl.carousel.css">
     <link rel="stylesheet" href="../assets/vendor/owl.carousel/../assets/owl.theme.default.css">
    <!-- stylesheet-->
    <link rel="stylesheet" href="../assets/css/style.css" id="theme-stylesheet">
    <!-- Favicon-->
     <link rel="shortcut icon" href="favicon.png">

  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top"><a class="logo" href="index.html">
<<<<<<< HEAD:password-reset/password-reset.html.php
        <img src="images/pain_diary_logo.png" alt="paindiary" height="60">
=======
        <img src="../assets/images/pain_diary_logo.png" alt="paindiary" height="60">
>>>>>>> 5f3990687190113653540360b97225c09d30abd4:reset-password/reset-password.html.php
      </a>
       <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto align-items-start align-items-lg-center" style="margin-left: 25%;">
<<<<<<< HEAD:password-reset/password-reset.html.php
            <li class="nav-item"><a href="index.html" class="nav-link link-scroll ">Home</a></li>
            <li class="nav-item"><a href="help.html" class="nav-link link-scroll">Help</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link link-scroll active">About</a></li>
            <li class="nav-item"><a href="term.html" class="nav-link link-scroll">Terms</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
=======
            <li class="nav-item"><a href="../index.html" class="nav-link link-scroll ">Home</a></li>
            <li class="nav-item"><a href="../help.html" class="nav-link link-scroll">Help</a></li>
            <li class="nav-item"><a href="../about.html" class="nav-link link-scroll active">About</a></li>
            <li class="nav-item"><a href="../term.html" class="nav-link link-scroll">Terms</a></li>
            <li class="nav-item"><a href="../contact.html" class="nav-link">Contact</a></li>
>>>>>>> 5f3990687190113653540360b97225c09d30abd4:reset-password/reset-password.html.php
          </ul>
          <div class="navbar-text" style="margin-left: 15%;">
            <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-outline-primary" style="margin-left: 20px; border-radius: 2px;">Login</a>
          </div>
          <div class="navbar-text">   
            <!-- Button trigger modal--><a href="#" data-toggle="modal" data-target="#registerModal" class="btn btn-primary navbar-btn btn-shadow" style="border-radius: 2px;">Register</a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Sign up Modal-->
    <div id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="registerModalLabel" class="modal-title">Sign Up</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form id="signupform" method="post" action="../register.php">
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
                    <br> I Agree to the <a href="term.html">Terms and Conditions</a>
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
     <div id="loginModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="registerModalLabel" class="modal-title">Sign In</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form id="signupform" method="post" action="../signin.php">
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
  <form method="post">
        <h2 class=" btn-lg btn-secondary  btn-block" style="border-radius: 5px">Password Reset Area</h2>
		<?php if (isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = MD5($_POST['password']);
			$password2 = MD5($_POST['password2']);
			if($password != $password2){?>
				<p><?php echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
            Password do not match. You should check password fields below.
           </div>' ?></p>
			<?php }else{
				
        include '../assets/databaseConnection.php';
        try
        {
        
          //check if email is registered
          $query = "SELECT user_id, email FROM user WHERE email=?";
          $stmt = $db->prepare($query);
          if($stmt){
              $stmt->bind_param('s', $email);
              $stmt->execute();
              $stmt->bind_result($userid, $email);
              $stmt->fetch();
              if($email != ''){

                $psql = "UPDATE user set password = '$password2' WHERE user_id = $userid";
                include '../assets/databaseConnection.php';
                if (mysqli_query($db, $psql)) {
                  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                  Password reset successful. 
                  </div>';  
                } else {
                  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                        Something went wrong: '. mysqli_error($db) .'
                  </div>';
                }
              } else{
                ?>
                <p><?php echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    Email not registered. You should check the email entered below.
              </div>' ?></p>
              <?php
              }
            }
        }
        catch (PDOException $e)
        {
          if(isset($e)){
        ?>
              <p><?php echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                  Your request failed. You should check the entered email.
            </div>';} ?></p>
              
            <?php
        }      
      }
    }
?>  	
		
        <label for="inputEmail" style="margin-bottom: 10px"> Your Email</label>
        <input type="email" style="margin-bottom: 10px" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" style="margin-bottom: 10px">New Password</label>
        <input type="password" style="margin-bottom: 10px" name="password" id="password" class="form-control" placeholder="Password" required>
		<label for="reenterPassword" style="margin-bottom: 10px" >Confirm Password</label>
        <input type="password" style="margin-bottom: 10px" name="password2" id="password" class="form-control" placeholder="Password" required>
        <input type="hidden" name="action" value="login">
        <input class="btn btn-lg btn-secondary center-block" style="border-radius: 5px; margin-top: 10px" type="submit" name="submit" value="Submit"/>
         
      </form>

             
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><img src="../assets/images/contact.jpg" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>
   
  
    
  
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
    <footer class="main-footer bg-gray">
        <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6"><a href="#" class="brand">Pain-Diary</a>
                <ul class="contact-info list-unstyled">
                  <li><a href="mailto:andreachristabel12@gmail.com">andreachristabel12@gmail.com</a></li>
                  <li><a href="tel:07456570406">+44 7456570406</a></li>
                </ul>
                <ul class="social-icons list-inline">
                  <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6">
                <h5>Let Us Help You</h5>
                <ul class="links list-unstyled">
                  <li> <a href="../help.html">More Info on Pain</a></li>
                  <li> <a href="../contact.html">Book a Demo</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6">
                <h5>More Info</h5>
                <ul class="links list-unstyled">
                  <li> <a href="../about.html">About</a></li>
                  <li> <a href="../summary.html">Pain Description</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6">
                <h5>Terms</h5>
                <ul class="links list-unstyled">
                  <li> <a href="../privacy.html">Privacy Policy</a></li>
                  <li> <a href="../term.html">Terms and Conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="copyrights">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <p>&copy; 2022 Christabel. All rights reserved.      </p>
                </div>
                <div class="col-md-5 text-right">
                  <p> <a href="#" class="external">CMM513</a>  </p>
                </div>
              </div>
            </div>
          </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/js/front.js"></script>
    <!---->
     
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>