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