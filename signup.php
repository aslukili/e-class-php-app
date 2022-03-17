<?php
include './includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="./public/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name = "keywords" content = "e-class, e-learning, students" />
    <meta name = "description" content = "e-class is the next generation of schools." />
    <title>Sign Up</title>
    <script src="main.js" defer></script>
</head>
<body>
<main
    class="background p-2 min-vh-100 d-flex justify-content-center align-items-center"
>
    <div
        class="bg-white col-12 p-3 rounded-4 shadow"
        style="max-width: 475px"
    >
        <img class="mt-2 ms-3" src="./asset/svg/logo.svg" alt="eclass logo" />
        <div class="text-center mt-2">
            <h1>SIGN UP</h1>
            <p class="text-secondary">
                Create new account
            </p>
        </div>
        <form class="mt-1" method="post" id="form">
            <div class="form-group mt-1 input-group-lg input-control">
                <label for="full_name" class="form-label mt-3">Full name</label>
                <input
                    id="fullName"
                    type="text"
                    class="form-control"
                    placeholder="Enter Your Full name"
                    name="full_name"
                />
                <div class="error"><!--this is  for errors--></div>
            </div>
            <div class="form-group mt-1 input-group-lg input-control">
                <label for="email" class="form-label">Email address</label>
                <input
                        id="email"
                        type="email"
                        class="form-control"
                        placeholder="Enter Your email"
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
            <div class="form-group mt-1 input-group-lg input-control">
                <label for="password" class="form-label">Password</label>
                <input
                    id="password"
                    type="password"
                    class="form-control"
                    placeholder="Enter Your password"
                    name="password"
                    minlength="3"
                />
                <div class="error">
                </div>
            </div>
            <div class="form-group mt-1 input-group-lg input-control">
                <label for="passwordConfirm" class="form-label">Confirm password</label>
                <input
                        id="passwordConfirm"
                        type="password"
                        class="form-control"
                        placeholder="confirm Your password"
                        name="password-confirm"
                        minlength="3"
                />
                <div class="error">
                </div>
            </div>
            <div class="form-group mt-4 input-group">
                <input
                    type="submit"
                    class="btn btn-primary text-white form-control"
                    value="SIGN UP"
                    name="sign_up"
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
    <script src="./bootstrap/js/bootstrap.js"></script>
</main>
</body>
</html>

<?php
if (isset($_POST['sign_up'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql_signup = "INSERT INTO students(name, email, phone, join_date, password) VALUES ('$name', '$email', '$phone', NOW(), '$password')";
    $result = mysqli_query($conn, $sql_signup);
    if($result){
        echo "You have successfully signed up";
        echo "
        <script>
        window.location.href = './students.php';
        </script>
    ";
    }
    else {
        echo "something went wrong!";
    }
}

?>