<?php include './dbh.inc.php';

$students_sql = "SELECT * FROM students";
$courses_sql = "SELECT * FROM courses";
//$payments_sql = "SELECT SUM(amount_paid) FROM payment_details";

$students = mysqli_query($conn, $students_sql);
if ($students){
    $students_count = mysqli_num_rows( $students);
}
if ($courses = mysqli_query($conn, $courses_sql)){
    $courses_count = mysqli_num_rows( $courses);
}

$payments = mysqli_query($conn, 'SELECT SUM(amount_paid) AS amount_sum FROM payment_details');
$row = mysqli_fetch_assoc($payments);
$sum = $row['amount_sum'];
?>