<!doctype html>
<html lang="en">
  <head>
   <?php include('includes/head.inc.php') ?>
  </head>
  <body class="vertical  light  ">

    <div class="wrapper">

      <!-- start header -->
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
              <span class="fe fe-bell fe-16"></span>
              <span class="dot dot-md bg-success"></span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="./assets/images/face.png" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <!-- <a class="dropdown-item" href="profile-settings.php">Profile</a> -->
              <a class="dropdown-item" href="profile-settings.php">Settings</a>
              <a class="dropdown-item" href="#">Activities</a>
              <a class="dropdown-item" href="auth-login.php">logout</a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- end header -->

      <!-- start sidebar -->
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-1 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="dashboard-analytics.php">
              <img src="./assets/images/talleco.png" alt="" class="rounded" width="80%">
              <br>
              <p class="text-muted nav-heading mt-4 mb-1">
                <span><u>Admin</u></span>
              </p>
            </a>
          </div>
          
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="dashboard-analytics.php" aria-expanded="false" class=" nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span>
              </a>              
            </li>
          </ul>         
          
          <ul class="navbar-nav flex-fill w-100 mb-2">            
            <li class="nav-item dropdown">
              <a href="#accounts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-16 fe-users"></i>
                <span class="ml-3 item-text">Account Management</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="accounts">
                <a class="nav-link pl-3" href="./mentors.php"><span class="ml-1">Mentors</span></a>
                <a class="nav-link pl-3" href="./interns.php"><span class="ml-1">Interns</span></a>
                
              </ul>
              <!-- <li class="nav-item dropdown">
                <a href="./subscription.php"  aria-expanded="false" class=" nav-link">
                  <i class="fe fe-credit-card fe-16"></i>
                  <span class="ml-3 item-text">Subscription Management</span>
                </a>              
              </li>
              <li class="nav-item dropdown">
                <a href="profile-settings.php"  aria-expanded="false" class=" nav-link">
                  <i class="fe fe-16 fe-settings"></i>
                  <span class="ml-3 item-text">Settings</span>
                </a>              
              </li> -->
            </li>
          </ul>
        </nav>
      </aside>
      <!-- end sidebar -->

      <!-- start body -->
      <div class="tab-content container-fluid">
          <main id="home" role="main" class="main-content  tab-pane active">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="row align-items-center mb-2">
                    <div class="col">
                      <h2 class="h5 page-title">DASHBOARD</h2>
                    </div>
                    <div class="col-auto">
                      <form class="form-inline">
                        <div class="form-group d-none d-lg-inline">
                          <label for="reportrange" class="sr-only">Date Ranges</label>
                          <div id="reportrange" class="px-2 py-2 text-muted">
                            <span class="small"></span>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- widgets -->
                  <div class="row my-4">
                    <div class="col-md-4">
                      <div class="card shadow mb-4">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <small class="text-muted mb-1">Pending</small>
                              <h3 class="card-title mb-0">1168</h3>
                              <p class="small text-muted mb-0"><span class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
                            </div>
                            <div class="col-4 text-right">
                              <span class="sparkline inlineline"></span>
                            </div>
                          </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                      </div> <!-- /. card -->
                    </div> <!-- /. col -->
                    <div class="col-md-4">
                      <div class="card shadow mb-4">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <small class="text-muted mb-1">Completed</small>
                              <h3 class="card-title mb-0">68</h3>
                              <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last week</span></p>
                            </div>
                            <div class="col-4 text-right">
                              <span class="sparkline inlinepie"></span>
                            </div>
                          </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                      </div> <!-- /. card -->
                    </div> <!-- /. col -->
                    <div class="col-md-4">
                      <div class="card shadow mb-4">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <small class="text-muted mb-1">Cancel</small>
                              <h3 class="card-title mb-0">108</h3>
                              <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
                            </div>
                            <div class="col-4 text-right">
                              <span class="sparkline inlinebar"></span>
                            </div>
                          </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                      </div> <!-- /. card -->
                    </div> <!-- /. col -->
                  </div> <!-- end section -->
                  <!-- linechart -->
                  <div class="my-4">
                    <div id="lineChart"></div>
                  </div>
                  
                  
                </div> <!-- /.col -->
              </div> <!-- .row -->
            </div>
          </main>

          <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="list-group list-group-flush my-n3">
                    <div class="list-group-item bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="fe fe-box fe-24"></span>
                        </div>
                        <div class="col">
                          <small><strong>Package has uploaded successfull</strong></small>
                          <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                          <small class="badge badge-pill badge-light text-muted">1m ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="fe fe-download fe-24"></span>
                        </div>
                        <div class="col">
                          <small><strong>Widgets are updated successfull</strong></small>
                          <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                          <small class="badge badge-pill badge-light text-muted">2m ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="fe fe-inbox fe-24"></span>
                        </div>
                        <div class="col">
                          <small><strong>Notifications have been sent</strong></small>
                          <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                          <small class="badge badge-pill badge-light text-muted">30m ago</small>
                        </div>
                      </div> <!-- / .row -->
                    </div>
                    <div class="list-group-item bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="fe fe-link fe-24"></span>
                        </div>
                        <div class="col">
                          <small><strong>Link was attached to menu</strong></small>
                          <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                          <small class="badge badge-pill badge-light text-muted">1h ago</small>
                        </div>
                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .list-group -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- start body -->

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/d3.min.js"></script>
    <script src="js/topojson.min.js"></script>
    <script src="js/datamaps.all.min.js"></script>
    <script src="js/datamaps-zoomto.js"></script>
    <script src="js/datamaps.custom.js"></script>
    <script src="js/Chart.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="js/gauge.min.js"></script>
    <script src="js/jquery.sparkline.min.js"></script>
    <script src="js/apexcharts.min.js"></script>
    <script src="js/apexcharts.custom.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script> -->
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>