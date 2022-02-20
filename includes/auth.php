<?php
//session_start();
//include 'dbh.inc.php';
//$errors = array('email'=>'', 'password'=>'');
//$email = $not_correct = $password = '';
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    //make sure to check if the email is valid before checking the database
//    if (empty($_POST['email'])){
//        $errors['email'] = 'an email is required';
//    }
//    else{
//        $email = $_POST['email'];
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//            $errors['email'] = "email is not valid";
//        }
//    }
//    if (empty($_POST['password'])){
//        $errors['password'] = 'a password is required';
//    } else {
//        $password = $_POST['password'];
//    }
//    //do not move to this part if the first one is not valid !!!
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $password = mysqli_real_escape_string($conn, $_POST['password']);
//
//    $sql = "select * FROM comptes WHERE email='$email' AND user_password='$password'";
//    $result = mysqli_query($conn, $sql);
//
//    // If result matched $email and $password, table row must be 1 row
//
//    $count_row = mysqli_num_rows($result);
//
//    if($count_row == 1){
//        header("location:  ../dashboard.php");
//    }else{
//        $not_correct = 'email or password is not correct';
//        header("location: ../index.php");
//    }
//}
//
//?>