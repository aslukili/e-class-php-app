<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name = "keywords" content = "e-class, e-learning, students" />
      <meta name = "description" content = "e-class is the next generation of schools." />

      <title>Dashboard</title>
  </head>
  <body>
    <main>
      <!-- page container -->
      <div class="container-fluid">
        <div class="row flex-nowrap">
          <!-- sidebar -->
          <?php include('./templates/sidebar.html')?>
          <!-- main page  -->
          <div class="container-fluid m-0 col-md-9 col-10 col-xxl-10">
            <!-- header -->
            <?php include('./templates/header.html');?>
            <!-- cards of info -->
            <div class="row mt-4">
              <!-- students card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-student">
                  <img src="./asset/svg/sudent-cap.svg" alt="student icon">
                  <p class="text-secondary">Students</p>
                  <div class="text-end">
                    <h3 class="d-inline">243</h3>
                  </div>
                </div>
              </div>
              <!-- courses card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-course">
                  <img src="./asset/svg/save.svg" alt="course icon">

                  <p class="text-secondary">Course</p>
                  <div class="text-end">
                    <h3 class="d-inline">13</h3>
                  </div>
                </div>
              </div>
              <!-- payments card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-payments">
                  <img src="./asset/svg/dollar.svg" alt="payment icon">

                  <p class="text-secondary">Payments</p>
                  <div class="text-end">
                    <span>DHS</span>
                    <h3 class="d-inline">556,000</h3>
                  </div>
                </div>
              </div>
              <!-- users card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-users">
                  <img src="./asset/svg/user.svg" alt="user icon">

                  <p class="text-secondary">Users</p>
                  <div class="text-end">
                    <h3 class="d-inline">3</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
