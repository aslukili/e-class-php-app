<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./public/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name = "keywords" content = "e-class, e-learning, students" />
      <meta name = "description" content = "e-class is the next generation of schools." />

      <title>Payments</title>
  </head>
  <body>
    <main>
      <!-- page container -->
      <div class="container-fluid">
        <div class="row flex-nowrap">
          <!-- sidebar -->
          <?php include('./includes/templates/sidebar.php');?>
          <!-- main page  -->
          <div class="bg-light container-fluid m-0 col-10 col-md-9 col-xxl-10">
            <!-- header -->
            <?php include('./includes/templates/header.html');?>
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
                include './includes/dbh.inc.php';

                //reading data from mysql
                $sql = "SELECT * FROM payment_details";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($payment = mysqli_fetch_assoc($result)){
                        $id = $payment['id'];
                        $name = $payment['name'];
                        $payment_schedual = $payment['payment_schedual'];
                        $bill_number = $payment['bill_number'];
                        $amount_paid = $payment['amount_paid'];
                        $balance_amount = $payment['balance_amount'];
                        $date = $payment['date'];

                        $row = <<<ROW
                            <tr>
                                <td class="align-middle py-3">$name</td>
                                <td class="align-middle py-3">$payment_schedual</td>
                                <td class="align-middle py-3">$bill_number</td>
                                <td class="align-middle py-3">$amount_paid</td>
                                <td class="align-middle py-3">$balance_amount</td>
                                <td class="align-middle py-3">$date</td>
                                <td class="align-middle p-3">
                                    <a  href="#" class="btn btn-bg-less" aria-label="edit"><i class="bi bi-pencil text-info"></i>
                                    </a>
                                    <a href="#" class="btn btn-bg-less" aria-label="delete"><i class="bi bi-trash text-info"></i>
                                    </a>
                                </td>
                            </tr>
ROW;
                        echo $row;
                    }
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
