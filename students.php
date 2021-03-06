<?php
session_start();
if (!isset($_SESSION['id'])){
    header("location: index.php");
}
include './includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css"/>
    <!-- bootstrap icons -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./public/style.css"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="e-class, e-learning, students"/>
    <meta name="description" content="e-class is the next generation of schools."/>
    <title>Students</title>
    <script src="toast.js"></script>
</head>
<body>
<main>
    <script>
        new Toast({message: 'Welcome to Toast.js!'});
    </script>
    <!-- page container -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- sidebar -->
            <?php include('./includes/templates/sidebar.php'); ?>
            <!-- main page  -->
            <div class="bg-light container-fluid m-0 col-10 col-md-9 col-xxl-10">
                <!-- header -->
                <?php include('./includes/templates/header.html'); ?>
                <!-- main content -->
                <!-- content head -->

                <div class="row align-items-center text-end py-1">
                    <!-- title -->
                    <div class="col-5 col-md-3 text-start">
                        <h2>Students list</h2>
                    </div>

                    <div class="d-none d-sm-block col-sm-2 col-md-5">
                        <!-- divider -->
                    </div>
                    <!-- toggle icon -->
                    <div class="col-1">
                        <svg
                                width="14"
                                height="22"
                                viewBox="0 0 14 22"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_1_208)">
                                <path
                                        d="M12.6 12.375H1.39998C0.157481 12.375 -0.472519 13.8574 0.411231 14.7211L6.01123 20.2211C6.55811 20.7582 7.44623 20.7582 7.99311 20.2211L13.5931 14.7211C14.4681 13.8574 13.8425 12.375 12.6 12.375ZM6.99998 19.25L1.39998 13.75H12.6L6.99998 19.25ZM1.39998 9.625H12.6C13.8425 9.625 14.4725 8.14257 13.5887 7.2789L7.98873 1.7789C7.44186 1.24179 6.55373 1.24179 6.00686 1.7789L0.406856 7.2789C-0.468144 8.14257 0.157481 9.625 1.39998 9.625ZM6.99998 2.74999L12.6 8.24999H1.39998L6.99998 2.74999Z"
                                        fill="#00C1FE"
                                />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_208">
                                    <rect width="14" height="22" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <!-- button -->
                    <div class="col-5 col-sm-4 col-md-3">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addStudentModal">add new student</button>
                    </div>
                </div>
                <hr class="m-0"/>
<!--                modal for add student -->
                <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="form" action="">
<!--                                    the same as sign up form here-->
                                    <div class="form-group mt-1 input-group-lg input-control">
                                        <label for="full_name" class="form-label mt-3">Full name</label>
                                        <input
                                                id="fullName"
                                                type="text"
                                                class="form-control"
                                                placeholder="Student name"
                                                name="full_name"
                                                required
                                        />
                                        <div class="error"><!--this is  for errors--></div>
                                    </div>
                                    <div class="form-group mt-1 input-group-lg input-control">
                                        <label for="email" class="form-label">Email address</label>
                                        <input
                                                id="email"
                                                type="email"
                                                class="form-control"
                                                placeholder="Student email"
                                                name="email"
                                                required
                                        />
                                        <div class="error"><!--this is  for errors--></div>
                                    </div>
                                    <div class="form-group mt-1 input-group-lg input-control">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input
                                                id="phone"
                                                type="tel"
                                                class="form-control"
                                                placeholder="+212662626262"
                                                name="phone"
                                                required
                                        />
                                        <div class="error"><!--this is  for errors--></div>
                                    </div>
                                    <div class="form-group mt-4 input-group">
                                        <input
                                                type="submit"
                                                class="btn btn-primary text-white form-control"
                                                value="ADD STUDENT"
                                                name="save"
                                        />
                                    </div>
                                    <div class="text-center mt-4 mb-3">
                                        <p class="d-inline text-secondary" style="margin-right: 10px">
                                            Forgot your password?
                                        </p>
                                        <a href="#">Rest password</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
<!--                model for updating students-->
                <div class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">update student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="form" action="">
                                    <!--                                    the same as sign up form here-->
                                    <div class="form-group mt-1 input-group-lg input-control">
                                        <label for="full_name" class="form-label mt-3">Full name</label>
                                        <input
                                                id="fullName"
                                                type="text"
                                                class="form-control"
                                                placeholder="Student name"
                                                name="full_name"
                                                required
                                        />
                                        <div class="error"><!--this is  for errors--></div>
                                    </div>
                                    <div class="form-group mt-1 input-group-lg input-control">
                                        <label for="email" class="form-label">Email address</label>
                                        <input
                                                id="email"
                                                type="email"
                                                class="form-control"
                                                placeholder="Student email"
                                                name="email"
                                                required
                                        />
                                        <div class="error"><!--this is  for errors--></div>
                                    </div>
                                    <div class="form-group mt-1 input-group-lg input-control">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input
                                                id="phone"
                                                type="tel"
                                                class="form-control"
                                                placeholder="+212662626262"
                                                name="phone"
                                                required
                                        />
                                        <div class="error"><!--this is  for errors--></div>
                                    </div>
                                    <div class="form-group mt-4 input-group">
                                        <input
                                                type="submit"
                                                class="btn btn-primary text-white form-control"
                                                value="ADD STUDENT"
                                                name="save"
                                        />
                                    </div>
                                    <div class="text-center mt-4 mb-3">
                                        <p class="d-inline text-secondary" style="margin-right: 10px">
                                            Forgot your password?
                                        </p>
                                        <a href="#">Rest password</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
<!--                modal for delete student-->
                <div class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                You are going to delete a student! you can't undo this
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a type="button" class="btn btn-danger" onclick="window.location.href=`./includes/students/delete-student.php?deleteid=${deleteId}`">Delete student</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-separate table-borderless">
                        <thead>
                        <tr class="text-secondary">
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date of Registration</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //reading data from mysql
                        $sql = "SELECT * FROM students";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($student = mysqli_fetch_assoc($result)){
                                $id = $student['id'];
                                $name = $student['name'];
                                $email = $student['email'];
                                $phone = $student['phone'];
                                $join_date = $student['join_date'];

                                $row = <<<ROW
                                    <tr class="bg-white">
                                        <td><img src="./asset/img/photo.png" alt="user pic"></td>
                                        <td class="align-middle py-3">$name</td>
                                        <td class="align-middle py-3">$email</td>
                                        <td class="align-middle py-3">$phone</td>
                                        <td class="align-middle py-3">$join_date</td>
                                        <td class="align-middle p-3">
                                            <button class="btn btn-bg-less" aria-label="edit" data-bs-toggle="modal" data-bs-target="#updateStudentModal" onclick="window.location.href='./students.php?updateid='"><i class="bi bi-pencil text-info"></i>
                                            </button>
                                            <button class="btn btn-bg-less" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" onclick="setId()">
                                               <i class="bi bi-trash text-info"></i>
                                            </button>
                                           
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
<!--<script>-->
<!--    function setId(){-->
<!--        let deleteId = --><?php //$id?>
<!--//    }-->
<!--//</script>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_POST['save'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql_insert = "INSERT INTO students(name, email, phone, join_date) VALUES ('$name', '$email', '$phone', NOW())";
    $result = mysqli_query($conn, $sql_insert);

    if($result){
        $_POST['save'] = null;
        echo "
        <script>
        window.location.href = './students.php';
</script>
        ";
    }
}
?>