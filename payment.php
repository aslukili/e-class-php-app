<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payments</title>
  </head>
  <body>
    <main>
      <!-- page container -->
      <div class="container-fluid">
        <div class="row flex-nowrap">
          <!-- sidebar -->
          <?php include('./templates/sidebar.html');?>
          <!-- main page  -->
          <div class="bg-light container-fluid m-0 col-10 col-md-9">
            <!-- header -->
            <?php include('./templates/header.html');?>
            <!-- main content -->
            <!-- content head -->
            <div class="row align-items-center text-end py-1">
              <!-- title -->
              <div class="col-5 text-start">
                <h2>Payments Details</h2>
              </div>

              <div class="col-5">
                <!-- divider -->
              </div>
              <!-- toggle icon -->
              <div class="text-center col-2">
               <img src="./asset/svg/sort.svg" alt="">
              </div>
            </div>
            <hr class="m-0" />
            <!-- table -->
            <div class="table-responsive">
              <table class="table table-striped table-borderless">
                <thead>
                  <tr class="text-secondary">
                    <th scope="col">Name</th>
                    <th scope="col">Payment schedual</th>
                    <th scope="col">Bill Number</th>
                    <th scope="col">Amount Paid</th>
                    <th scope="col">Balance amount</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $payments = array (
                array("name"=>"someone", "schedual"=>"first", "Bill"=>"00012223", "amount"=>"DH 100,00", "balance"=>"DH 500,00", "date"=>"05-jan,2022"),
                array("name"=>"someone", "schedual"=>"first", "Bill"=>"00012223", "amount"=>"DH 100,00", "balance"=>"DH 500,00", "date"=>"05-jan,2022"),
                array("name"=>"someone", "schedual"=>"first", "Bill"=>"00012223", "amount"=>"DH 100,00", "balance"=>"DH 500,00", "date"=>"05-jan,2022"),
                array("name"=>"someone", "schedual"=>"first", "Bill"=>"00012223", "amount"=>"DH 100,00", "balance"=>"DH 500,00", "date"=>"05-jan,2022")
                );
                  foreach ($payments as $payment) {
                    echo '<tr>';
                    foreach ($payment as $value) {
                      echo '<td class="align-middle p-3">' . $value . '</td>';    
                    }
                    echo '</tr>';
                  } 
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
