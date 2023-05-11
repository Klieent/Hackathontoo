<!doctype html>
<html lang="en">
  <head>
    <?php include('includes/head.inc.php');
        include "../Model/db.php";
      ?>
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
              <!-- <a class="dropdown-item" href="profile-settings.php">Profile</a> -->
              <a class="dropdown-item" href="profile-settings.php">Settings</a>
              <a class="dropdown-item" href="#">Activities</a>
              <a class="dropdown-item" href="auth-login.php">logout</a>
            </div>
          </li>
        </ul>
      </nav>

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
                <span><u>DEPARTMENT</u></span>
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
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="department.php" aria-expanded="false" class=" nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Department Management</span>
              </a>              
            </li>
          </ul> 
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="school.php" aria-expanded="false" class=" nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">School Management</span>
              </a>              
            </li>
          </ul> 
        </nav>
      </aside>
      <!-- end sidebar -->

      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h3 mb-3 page-title"><span style="text-decoration: none; border-bottom:1px solid green;">MENTORS</span></h2>
              <div class="row mb-4 items-align-center">
                <div class="col-md">
                  <button type="button" class="btn mb-2 btn-success" data-toggle="modal" data-target="#verticalModal">+Add Mentor</button>
                </div>
                <div class="col-md-auto ml-auto text-right">                  
                  <form action="" class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
                    <input class=" bg-transparent border-0 text-white" placeholder="Search..." type="text" name="" id="">
                  </form>
                </div>
              </div>

              <!-- start table -->
              <table class="table border table-hover bg-white">
                <thead>
                  <tr role="row">
                    <th>#</th>
                    <th>Mentor Name</th>
                   
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Department</th>                    
                    <!-- <th>Status</th>-->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                    $mentors = getAll('mentor');
                    while($mentor = mysqli_fetch_assoc($mentors)){
                  ?>
                  <tr>
                    <td><?php echo $mentor['mentor_id'] ?></td>
                    <td><?php echo $mentor['firstname']  . " ". $mentor['lastname']?></td>
                    
                    <td><?php echo $mentor['email'] ?></td>
                    <td><?php echo $mentor['contact_number'] ?></td>
                    <td><?php echo $mentor['department'] ?></td>                    
                    <!-- <td><span class="dot dot-lg bg-success mr-2"></span>&nbsp;Active</td>                     -->
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item btn mb-2 btn-success" href="#" type="button" data-toggle="modal" data-target="#verticalModalEdit<?php echo $mentor['mentor_id']?>">Edit</a>
                          <a class="dropdown-item" href="#" type="button" data-toggle="modal" data-target="#delete<?php echo $mentor['mentor_id']?>">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                    <!-- start modal edit -->
                  <div class="modal fade modal-input" id="verticalModalEdit<?php echo $mentor['mentor_id']?>" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                      <form method="POST" action="../Controller/MentorController.php?mentor_id=<?php echo $mentor['mentor_id']?>">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <h1 class="modal-title" id="verticalModalTitle">Edit Mentor</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <div class="row">
                            <div class="col">
                              <label for="simpleinput">First Name</label>
                              <input type="text" id="simpleinput" class="form-control" name="firstname" value="<?php echo $mentor['firstname']?>">
                            </div>
                            <div class="col">
                              <label for="simpleinput">Middle Name</label>
                              <input type="text" id="simpleinput" class="form-control" name="middlename" value="<?php echo $mentor['middlename']?>">
                            </div>
                            <div class="col">
                              <label for="simpleinput">Last Name</label>
                              <input type="text" id="simpleinput" class="form-control" name="lastname" value="<?php echo $mentor['lastname']?>">
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col">
                              <label for="simpleinput">Email</label>
                              <input type="email" id="simpleinput" class="form-control" name="email" value="<?php echo $mentor['email']?>">
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col">
                              <label for="simpleinput">Contact Number</label>
                              <input type="number" id="simpleinput" class="form-control" name="contact_number" value="<?php echo $mentor['contact_number']?>">
                            </div>
                            <div class="col">
                              <label for="example-select">Department</label>
                              <select class="form-control" id="example-select" name="department">
                                <option value="1">Department1</option>
                                <option value="2">Department2</option>
                             
                              </select>
                            </div>
                          </div>
                          <br>
                         
                          <br>
                        </div>
                          <div class="modal-footer">
                            <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn mb-2 btn-primary" name="editMentor">Edit</button>
                          </div>
                        </div>
                        </form>
                    </div>
                  </div>
                  <!-- end modal edit -->


                      <div class="modal fade modal-input" id="delete<?php echo $mentor['mentor_id']?>" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                      <form action="../Controller/MentorController.php?mentor_id=<?php echo $mentor['mentor_id']?>" method="POST">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <h3 class="modal-title" id="verticalModalTitle">Delete Intern</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <p>
                           This action cannot be undone.
                          </p>
                        </div>

                          <div class="modal-footer">
                            <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn mb-2 btn-primary" name="deleteMentor">Delete</button>
                          </div>
                        </div>
                        </form>
                        
                    
                    </div>
                    
                  </div>



                  <?php }?>
                </tbody>
              </table>
              <!-- end table -->

              
            </div>
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <!-- start modal add -->
        <div class="modal fade modal-input" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <form action="../Controller/MentorController.php" method="POST">
            <div class="modal-content ">
              <div class="modal-header">
                <h1 class="modal-title" id="verticalModalTitle">Add Mentor</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col">
                    <label for="simpleinput">First Name</label>
                    <input type="text" id="simpleinput" class="form-control" name="firstname">
                  </div>
                  <div class="col">
                    <label for="simpleinput">Middle Name</label>
                    <input type="text" id="simpleinput" class="form-control" name="middlename">
                  </div>
                  <div class="col">
                    <label for="simpleinput">Last Name</label>
                    <input type="text" id="simpleinput" class="form-control" name="lastname">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <label for="simpleinput">Email</label>
                    <input type="email" id="simpleinput" class="form-control" name="email">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <label for="simpleinput">Contact Number</label>
                    <input type="number" id="simpleinput" class="form-control" name="contact_number">
                  </div>
                  <div class="col">
                    <label for="example-select">Department</label>
                    <select class="form-control" id="example-select" name="department">
                      <option value="1">Department1</option>
                      <option value="2">Department2</option>
                     
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <label for="simpleinput">Username</label>
                    <input type="text" id="simpleinput" class="form-control" name="username">
                  </div>
                  <div class="col">
                    <label for="simpleinput">Password</label>
                    <input type="password" id="simpleinput" class="form-control" name="password">
                  </div>
                </div>
                <br>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn mb-2 btn-primary" name="addMentor">Add</button>
                </div>
              </div>
              </form>
          </div>
        </div>
        <!-- end modal add -->

      

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
    <script src='js/jquery.mask.min.js'></script>
    <script src='js/select2.min.js'></script>
    <script src='js/jquery.steps.min.js'></script>
    <script src='js/jquery.validate.min.js'></script>
    <script src='js/jquery.timepicker.js'></script>
    <script src='js/dropzone.min.js'></script>
    <script src='js/uppy.min.js'></script>
    <script src='js/quill.min.js'></script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').php(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
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