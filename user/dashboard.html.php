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
      <a class="nav-link px-3" href="?logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column" style="margin-top:35px">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=".">
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
            <a class="nav-link" href="?profile">
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-margin" id="report-content">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <h1 class="h2">Dashboard</h1>
        </script>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a class="nav-link px-3" href="#"><?php echo "Welcome " . $_SESSION['fullname'] ?></a>
          </div>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      <h1 class="h4">Symptom Details</h1>
      <hr>
      <div class="table-responsive">
                <table class="table table-hover table-sm">
                <thead>
                    <tr>
                    <th scope="col">S_NO</th>
                    <th scope="col">Symptom</th>
                    <th scope="col">DateTime</th>
                    <th scope="col">Pain Severity</th>
                    <th scope="col">Pain Duration</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (!$symptoms){ echo '<span>No Record Found</span>'; } else{ $s_no = 1; foreach ($symptoms as $symptom):  ?>
                    <form method="POST" >
                        <tr>
                        <td><?php echo $s_no ?></td>
                        <td><?php echo $symptom['name'] ?></td>
                        <td><?php echo $symptom['date'] ?></td>
                        <td>
                            <div class="progress" style="margin-top: 10px; height: 20px">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo ($symptom['pain_level']/10)*100?>%;  background-color: <?php if ($symptom['pain_level'] <= 2) { echo '#4BB543'; } else if ($symptom['pain_level'] < 7) { echo '#FFBF00';  } else { echo 'red'; }?>;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="10"><?php echo $symptom['pain_level'] ?></div>
                            </div>
                        </td>
                        <td><?php echo $symptom['pain_duration'] ?></td>
                        </tr>
                    </form>
                    <?php $s_no++; endforeach; } ?>
                </tbody>
                </table>
        </div>
    </main>
  </div>
</div>
<footer class="main-footer bg-gray" style="margin-left: 250px">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6"><a href="#" class="brand">PainDiary</a>
            <ul class="contact-info list-unstyled">
              <li><a href="mailto:support@paindiary.com">support@paindiary.com</a></li>
              <li><a href="tel:05678909888">+445678909888</a></li>
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
    <script>
          // Access the array elements
          var chartArray = <?php echo json_encode($charts); ?>;
          var label_values = [];
          var data_values = [];
            // Display the array elements
            //console.log(chartArray);
            for (let i=0; i<chartArray.length; i++) {
              label_values.push(chartArray[i]['name']);
              data_values.push(chartArray[i]['level']);
              console.log(chartArray[i]['name'] + " " + chartArray[i]['level']);
            // document.write(charArray[i].name + " " chartArray[i].level)
            }
            /* globals Chart:false, feather:false */

          (function () {
            'use strict'
            feather.replace({ 'aria-hidden': 'true' })
            // Graphs
            var ctx = document.getElementById('myChart')
            // eslint-disable-next-line no-unused-vars
            var myChart = new Chart(ctx, {
              type: 'line',
              data: {
                labels: label_values,
                datasets: [{
                  data: data_values,
                  label: 'Average Pain Severity',
                  lineTension: 0,
                  backgroundColor: 'transparent',
                  borderColor: '#007bff',
                  borderWidth: 4,
                  pointBackgroundColor: '#007bff'
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: false
                    }
                  }]
                },
                legend: {
                  display: true
                }
              }
            })
          })()
  </script>
  </body>
</html>
