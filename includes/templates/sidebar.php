<div class="min-vh-100 bg-sidebar col-md-3 col-2 col-xxl-2" style="position: sticky">
  <!-- logo -->
  <img
    src="./asset/svg/logo.svg"
    alt="e-class logo"
    class="ms-4 mt-3 d-none d-md-inline"
  />
  <!-- sidebar except logo -->
  <div class="text-center mt-5" >
    <!-- container for user img, name, role -->
    <div class="d-none d-md-block">
      <img
        src="./asset/img/YouCode.jpeg"
        alt="YouCode pic"
        class="rounded-circle"
        style="width: 100px; height: 100px"
      />

      <div class="mt-2">
        <span><b> <?php echo $_SESSION['first_name'] .' '. $_SESSION['last_name']?></b></span>
      </div>
      <span class="text-info">admin</span>
    </div>
    <!-- container for sidebar list elements-->
    <div class="mx-auto my-5" style="max-width: 190px">
      <ul class="list-group text-start mx-md-2 list-style-none">
        <li class="text-center list-group-item bg-active rounded-3 p-1 py-2">
          <a href="./dashboard.php" class="btn btn-bg-less p-0 m-auto" aria-label="Home">
            <i class="bi bi-house-door me-2"></i>
            <span class="d-none d-md-inline">Home</span>
          </a>
        </li>
        <li class="text-center list-group-item p-1 py-2 hover-list">
          <a href="./courses.php" class="btn btn-bg-less p-0 m-auto" aria-label="Course">
            <i class="bi bi-bookmark me-2"></i>
            <span class="d-none d-md-inline">Course</span>
          </a>
        </li>
        <li class="text-center list-group-item p-1 py-2 hover-list">
          <a href="./students.php" class="btn btn-bg-less p-0 m-auto" aria-label="Students">
            <i class="bi bi-mortarboard me-2"></i>
            <span class="d-none d-md-inline">Students</span>
          </a>
        </li>

        <li class="text-center list-group-item p-1 py-2 hover-list">
          <a href="./payment.php" class="btn btn-bg-less p-0 m-auto" aria-label="Payments">
            <i class="bi bi-currency-dollar me-2"></i>
            <span class="d-none d-md-inline">Payments</span>
          </a>
        </li>

        <li class="text-center list-group-item p-1 py-2 hover-list" >
          <a href="#" class="btn btn-bg-less p-0 m-auto" aria-label="Report">
            <i class="bi bi-file-earmark-bar-graph me-2"></i>
            <span class="d-none d-md-inline">Report</span>
          </a>
        </li>
        <li class="text-center list-group-item p-1 py-2 hover-list" >
          <a href="#" class="btn btn-bg-less p-0 m-auto" aria-label="Settings">
            <i class="bi bi-sliders me-2"></i>
            <span class="d-none d-md-inline">Settings</span>
          </a>
        </li>
        <!-- logout -->
        <li class="text-center mt-5 hover-list">
          <a href="./includes/logout.php?logout" class="btn btn-bg-less" aria-label="logout">
            <span class="d-none d-md-inline">Logout</span>
            <i class="bi bi-box-arrow-right"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
