<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Pain Diary</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .main-margin {
         margin-bottom: 50px; 
         border-bottom: 1px solid #eee; 
         padding-bottom: 20px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="../assets/images/pain_diary_logo.png" height="40"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#"><?php echo "Welcome " . $_SESSION['fullname'] ?></a>
      <a class="nav-link px-3" href="?logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column" style="margin-top:45px">
          <li class="nav-item">
            <a class="nav-link" href=".">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?symptoms">
              <span data-feather="file"></span>
              Symptoms
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?symptom-form" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
              Add Symptom
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?report">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?profile">
              <span data-feather="user"></span>
              Profile
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
              <a class="nav-link" href="?this-week">
                <span data-feather="file-text"></span>
                This Week
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="?current-month">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?last-quarter">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-margin">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Profile</h1>
      </div>
                    <div class="row gutters-sm">
                        <div class="col-md-8">
                          <div class="card mb-3">
                          <div class="card-body">
                                <?php if(isset($_SESSION['message'])) {  ?>
                                    <div class="alert alert-warning">
                                        <h5><?php echo $_SESSION['message'] ?></h5>
                                    </div>
                                <?php } ?>
                              <form method="POST">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  <input type="text" class="form-control" name="fullname" value="<?php echo $_SESSION['fullname']; ?>" />
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>" />
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" />
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Date of Birth</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input type="date" class="form-control" name="dob" value="<?php echo $_SESSION['dob']; ?>" />
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  <select class="form-control" name="gender">
                                    <option>Select</option>
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>" />
                                  <input type="submit" class="btn btn-success " name="action" value="Submit" />
                            </form>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
    </main>
  </div>
</div>
<footer class="main-footer bg-gray" style="margin-left: 250px">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6"><a href="#" class="brand">PainDiary</a>
            <ul class="contact-info list-unstyled">
              <li><a href="mailto:sales@bella.com">support@paindiary.com</a></li>
              <li><a href="tel:07776795096">+445678909888</a></li>
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
              <li> <a href="#">Help Center</a></li>
              <li> <a href="#">Book a Demo</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>More Info</h5>
            <ul class="links list-unstyled">
              <li> <a href="#">About</a></li>
              <li> <a href="#">Enquiry</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>Terms</h5>
            <ul class="links list-unstyled">
              <li> <a href="#">Privacy Policy</a></li>
              <li> <a href="#">Terms and Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <p>&copy; 2022 Bella. All rights reserved.      </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="../assets/js/dashboard.js"></script>
  </body>
</html>

