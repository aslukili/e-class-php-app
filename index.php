<?php
//form validation
session_start();
include './includes/dbh.inc.php';

$errors = array('email'=>'', 'password'=>''); //errors strings
$not_correct = ''; //wrong email or password error
$email = $password = ''; // values of email and password when they are wrong
$is_email_valid = $is_pw_valid = false; //variables to check if the input is valid before checking the database


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //make sure to check if the email is valid before checking the database
    if (empty($_POST['email'])){
        $errors['email'] = 'an email is required';
    }
    else{
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "email is not valid";
        } else {
            $is_email_valid = true;
        }
    }
    if (empty($_POST['password'])){
        $errors['password'] = 'a password is required';
    } else {
        $password = $_POST['password'];
        $is_pw_valid = true;
    }


//  $email = mysqli_real_escape_string($conn, $_POST['email']);
//  $password = mysqli_real_escape_string($conn, $_POST['password']);


    if ($is_pw_valid && $is_email_valid){
        $sql = "select * FROM comptes WHERE email='$email' AND user_password='$password'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        // If result matched $email and $password, table row should be 1 row
        $count_row = mysqli_num_rows($result);

        if($count_row == 1){
            $_SESSION['id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['start'] = time();
            $_SESSION['end'] = $_SESSION['start'] + (30); // for 24h (60*60)

            //set cookies here
            if(!empty($_POST["remember_me"])){
                setcookie("email",$email,time()+30*24*60*60);
                setcookie("password",$password,time()+30*24*60*60);
                setcookie('remember_me', $_POST['remember_me'], time()+30*24*60*60);
            } else {
                //expire cookies
                setcookie('email', $email, 3);
                setcookie('password', $password, 3);
                setcookie('remember_me', $_POST['remember_me'], 3);
            }
            header("location:  ./dashboard.php");
        }else{
            $not_correct = 'email or password is not correct';
        }
    }
}
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

    <title>Login</title>
  </head>
  <body>
    <main
      class="background p-2 vh-100 d-flex justify-content-center align-items-center"
    >
      <div
        class="bg-white col-12 p-3 rounded-4 shadow"
        style="max-width: 475px"
      >
        <img class="mt-2 ms-3" src="./asset/svg/logo.svg" alt="eclass logo" />
        <div class="text-center mt-5">
          <h1>SIGN IN</h1>
          <p class="text-secondary">
            Enter Your Credentials to access your account
          </p>
        </div>
        <form class="mt-3" method="post" >
          <div class="form-group mt-3 input-group-lg">
              <p class="text-danger"><?php echo $not_correct;?></p>
            <label for="email" class="form-label mt-3">Email</label>
            <input
              type="email"
              class="form-control"
              placeholder="Enter Your Email"
              name="email"
              value="<?php
              if ((!$errors || !$not_correct) && isset($_COOKIE['email'])){
                  echo $_COOKIE['email'];
              } else {
                  echo htmlspecialchars($email);
              }

//              if (isset($_COOKIE['email'])){
//                  echo $_COOKIE['email'];
//              } else if ($not_correct || $errors){
//                  echo htmlspecialchars($email);
//              }
              ?>"
            />
              <div class="text-danger">
                  <?php echo $errors['email'];?>
              </div>
          </div>
          <div class="form-group mt-3 input-group-lg">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              placeholder="Enter Your password"
              value="<?php
              if ((!$errors || !$not_correct) && isset($_COOKIE['password'])){
                  echo $_COOKIE['password'];
              } elseif ($errors || $not_correct) {
                  echo htmlspecialchars($password);
              }
              ?>"
              name="password"
            />
              <div class="text-danger">
                  <?php echo $errors['password'];?>
              </div>
          </div>
            <div class="form-group mt-3 input-group-lg">
                <input type="checkbox" name="remember_me" <?php
                if (isset($_COOKIE['remember_me'])){
                    echo "checked";
                }
                ?>/>
                <label class="form-label">remember me</label>
            </div>
          <div class="form-group mt-4 input-group-lg">
            <input
              type="submit"
              class="btn btn-primary text-white form-control"
              value="SIGN IN"
              name="submit"
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


