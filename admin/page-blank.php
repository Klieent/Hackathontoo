<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
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
                <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activities</a>
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
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.php">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="./index.php"><span class="ml-1 item-text">Default</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./dashboard-analytics.php"><span class="ml-1 item-text">Analytics</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./dashboard-sales.php"><span class="ml-1 item-text">E-commerce</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./dashboard-saas.php"><span class="ml-1 item-text">Saas Dashboard</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./dashboard-system.php"><span class="ml-1 item-text">Systems</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">UI elements</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-color.php"><span class="ml-1 item-text">Colors</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-typograpy.php"><span class="ml-1 item-text">Typograpy</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-icons.php"><span class="ml-1 item-text">Icons</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-buttons.php"><span class="ml-1 item-text">Buttons</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-notification.php"><span class="ml-1 item-text">Notifications</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-modals.php"><span class="ml-1 item-text">Modals</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-tabs-accordion.php"><span class="ml-1 item-text">Tabs & Accordion</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./ui-progress.php"><span class="ml-1 item-text">Progress</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="widgets.php">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Widgets</span>
                <span class="badge badge-pill badge-primary">New</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-credit-card fe-16"></i>
                <span class="ml-3 item-text">Forms</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./form_elements.php"><span class="ml-1 item-text">Basic Elements</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./form_advanced.php"><span class="ml-1 item-text">Advanced Elements</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./form_validation.php"><span class="ml-1 item-text">Validation</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./form_wizard.php"><span class="ml-1 item-text">Wizard</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./form_layouts.php"><span class="ml-1 item-text">Layouts</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./form_upload.php"><span class="ml-1 item-text">File upload</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Tables</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./table_basic.php"><span class="ml-1 item-text">Basic Tables</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./table_advanced.php"><span class="ml-1 item-text">Advanced Tables</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./table_datatables.php"><span class="ml-1 item-text">Data Tables</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-pie-chart fe-16"></i>
                <span class="ml-3 item-text">Charts</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./chart-inline.php"><span class="ml-1 item-text">Inline Chart</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./chart-chartjs.php"><span class="ml-1 item-text">Chartjs</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./chart-apexcharts.php"><span class="ml-1 item-text">ApexCharts</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./datamaps.php"><span class="ml-1 item-text">Datamaps</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Apps</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="calendar.php">
                <i class="fe fe-calendar fe-16"></i>
                <span class="ml-3 item-text">Calendar</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-book fe-16"></i>
                <span class="ml-3 item-text">Contacts</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                <a class="nav-link pl-3" href="./contacts-list.php"><span class="ml-1">Contact List</span></a>
                <a class="nav-link pl-3" href="./contacts-grid.php"><span class="ml-1">Contact Grid</span></a>
                <a class="nav-link pl-3" href="./contacts-new.php"><span class="ml-1">New Contact</span></a>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Profile</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                <a class="nav-link pl-3" href="./profile.php"><span class="ml-1">Overview</span></a>
                <a class="nav-link pl-3" href="./profile-settings.php"><span class="ml-1">Settings</span></a>
                <a class="nav-link pl-3" href="./profile-security.php"><span class="ml-1">Security</span></a>
                <a class="nav-link pl-3" href="./profile-notification.php"><span class="ml-1">Notifications</span></a>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-folder fe-16"></i>
                <span class="ml-3 item-text">File Manager</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                <a class="nav-link pl-3" href="./files-list.php"><span class="ml-1">Files List</span></a>
                <a class="nav-link pl-3" href="./files-grid.php"><span class="ml-1">Files Grid</span></a>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-compass fe-16"></i>
                <span class="ml-3 item-text">Help Desk</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="support">
                <a class="nav-link pl-3" href="./support-center.php"><span class="ml-1">Home</span></a>
                <a class="nav-link pl-3" href="./support-tickets.php"><span class="ml-1">Tickets</span></a>
                <a class="nav-link pl-3" href="./support-ticket-detail.php"><span class="ml-1">Ticket Detail</span></a>
                <a class="nav-link pl-3" href="./support-faqs.php"><span class="ml-1">FAQs</span></a>
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Extra</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-file fe-16"></i>
                <span class="ml-3 item-text">Pages</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100 w-100" id="pages">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./page-orders.php">
                    <span class="ml-1 item-text">Orders</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./page-timeline.php">
                    <span class="ml-1 item-text">Timeline</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./page-invoice.php">
                    <span class="ml-1 item-text">Invoice</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./page-404.php">
                    <span class="ml-1 item-text">Page 404</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./page-500.php">
                    <span class="ml-1 item-text">Page 500</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./page-blank.php">
                    <span class="ml-1 item-text">Blank</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-shield fe-16"></i>
                <span class="ml-3 item-text">Authentication</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                <a class="nav-link pl-3" href="./auth-login.php"><span class="ml-1">Login 1</span></a>
                <a class="nav-link pl-3" href="./auth-login-half.php"><span class="ml-1">Login 2</span></a>
                <a class="nav-link pl-3" href="./auth-register.php"><span class="ml-1">Register</span></a>
                <a class="nav-link pl-3" href="./auth-resetpw.php"><span class="ml-1">Reset Password</span></a>
                <a class="nav-link pl-3" href="./auth-confirm.php"><span class="ml-1">Confirm Password</span></a>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#layouts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-layout fe-16"></i>
                <span class="ml-3 item-text">Layout</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="layouts">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./index.php"><span class="ml-1 item-text">Default</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./index-horizontal.php"><span class="ml-1 item-text">Top Navigation</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./index-boxed.php"><span class="ml-1 item-text">Boxed</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Documentation</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="../docs/index.php">
                <i class="fe fe-help-circle fe-16"></i>
                <span class="ml-3 item-text">Getting Start</span>
              </a>
            </li>
          </ul>
          <div class="btn-box w-100 mt-4 mb-1">
            <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269" target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
              <i class="fe fe-shopping-cart fe-12 mx-2"></i><span class="small">Buy now</span>
            </a>
          </div>
        </nav>
      </aside>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h1 class="page-title">Let's start</h1>
            </div> <!-- .col-12 -->
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