<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Profile</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
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
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
              <span class="fe fe-grid fe-16"></span>
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

      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-1 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="dashboard-analytics.php">
              <img src="./assets/images/donki.jpg" alt="" class="rounded-circle" width="40%">
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
                <a class="nav-link pl-3" href="./service_providers.php"><span class="ml-1">Service Provider</span></a>
                <a class="nav-link pl-3" href="./service_seekers.php"><span class="ml-1">Sevice Seekers</span></a>
                <!-- <a class="nav-link pl-3" href="./profile-security.php"><span class="ml-1">Security</span></a>
                <a class="nav-link pl-3" href="./profile-notification.php"><span class="ml-1">Notifications</span></a> -->
              </ul>
              <li class="nav-item dropdown">
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
              </li>
              
            </li>
          </ul>
        </nav>
      </aside>

      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
              <h2 class="h3 mb-4 page-title">Settings</h2>
              <div class="my-4">

                <!-- start of tablist -->
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#security" role="tab" aria-controls="profile" aria-selected="false">Security</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="contact" aria-selected="false">Notifications</a>
                  </li> -->
                </ul>
                <!-- end of tablist -->

                <!-- start of tablist content -->
                <form>
                  <div class="tab-content">
                    <!-- start of home content -->
                    <div class="tab-pane active" id="home">
                      <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                          <div class="avatar avatar-xl">
                            <img src="./assets/images/donki.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>
                        </div>
                        <div class="col">
                          <div class="row align-items-center">
                            <div class="col-md-7">
                              <h4 class="mb-1">reevenn beltran</h4>
                              <p class="small mb-3"><span class="badge badge-success">SUPER ADMIN</span>&nbsp;<span class="badge badge-warning">ADMIN</span></p>
                            </div>
                          </div>
                          <div class="row mb-4">
                            <div class="col-md-7">
                              <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien. </p>
                            </div>
                            <div class="col">
                              <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                              <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                              <p class="small mb-0 text-muted">(537) 315-1481</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="my-4">
                      <form action="">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" id="firstname" class="form-control" value="reevenn">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lastname">Lastname</label>
                            <input type="text" id="lastname" class="form-control" value="beltran">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" id="inputEmail4" value="test@gmail.com">
                        </div>
                        <hr class="my-4">
                        <div>
                          <button type="submit" class="ml-2 btn btn-primary float-right">Save Change</button>
                          <button type="submit" class="btn btn-outline-warning float-right">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- end of home content -->
                    
                    <!-- start of security content -->
                      <div class="list-group mb-5 shadow tab-pane" id="security">
                        <h5 class="mb-0 mt-5">Security Settings</h5>
                        <p>These settings are helps you keep your account secure.</p>
                        <hr class="my-4">
                        <form action="">
                          <div class="row mb-4">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputPassword4">Old Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                              </div>
                              <div class="form-group">
                                <label for="inputPassword5">New Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                              </div>
                              <div class="form-group">
                                <label for="inputPassword6">Confirm Password</label>
                                <input type="password" class="form-control" id="inputPassword6">
                              </div>
                              <div>
                                <button type="submit" class="ml-2 btn btn-primary float-right">Save Change</button>
                                <button type="submit" class="btn btn-outline-warning float-right">Cancel</button>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-2">Password requirements</p>
                              <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
                              <ul class="small text-muted pl-4 mb-0">
                                <li> Minimum 8 character </li>
                                <li>At least one special character</li>
                                <li>At least one number</li>
                                <li>Can’t be the same as a previous password </li>
                              </ul>
                            </div>
                          </form>
                        </div>
                        <br>                        
                      </div>
                      <!-- .list-group -->

                  </div>
                </form>
                <!-- end of tablist content-->  

                <!-- start of header tools -->
              </div> <!-- /.card-body -->
            </div> <!-- /.col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
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
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-success justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Control area</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Activity</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Droplet</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Upload</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-users fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Users</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Settings</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
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