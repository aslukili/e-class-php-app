
<?php
//crud with mysql
include '../includes/dbh.inc.php';  //connection to the database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<h1>Add new student</h1>
<form class="container" style="max-width: 500px" method="POST">
    <div class="input-group mb-3">
        <label class="form-label">name</label>
        <input class="form-control" type="text" placeholder="Name" name="name" required>
    </div>
    <div class="input-group mb-3">
        <label class="form-label">email</label>
        <input class="form-control" type="email" placeholder="Name" name="email" required>
    </div>
    <div class="input-group mb-3">
        <label class="form-label">Phone number</label>
        <input class="form-control" type="text" placeholder="e.g. +21262121221" name="phone" required>
    </div>
    <div class="input-group mb-3">
        <label class="form-label">enroll number</label>
        <input class="form-control" type="number" placeholder="number" name="enroll_number" required>
    </div>
    <div class="input-group mb-3">
        <label class="form-label">join date</label>
        <input class="form-control" type="date" name="join_date">
    </div>
    <div class="input-group">
        <input class="btn btn-primary" type="submit" value="save" name="save">
    </div>
</form>
</body>
</html>

<?php
//form submitting
if (isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll_number = $_POST['enroll_number'];
    $join_date = $_POST['join_date'];

    $sql_insert = "INSERT INTO students(name, email, phone, enroll_number, join_date) VALUES ('$name', '$email', '$phone', $enroll_number, '$join_date')";
    $result = mysqli_query($conn, $sql_insert);
    if($result){
        echo "Student record is successfully inserted!";
    }
    else {
        echo "something went wrong!";
    }


    echo "
        <script>
        window.location.href = '../students.php';
        </script>
    ";
}




///use better code for this
//if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])&& isset($_POST['number'])&& isset($_POST['join_date'])) {
//    $student = [
//        "id" => uniqid(),
//        "name" => $_POST['name'],
//        "email" => $_POST['email'],
//        "phone" => $_POST['phone'],
//        "number" => $_POST['number'],
//        "join_date" => $_POST['join_date']
//    ];



//


?>