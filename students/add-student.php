<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add new student</h1>
<form action="" method="POST">
    <input type="text" placeholder="Name" name="name" required>
    <input type="email" placeholder="Email" name="email" required>
    <input type="text" placeholder="phone" name="phone" required>
    <input type="text" placeholder="enroll number" name="number" required>
    <input type="date" placeholder="join date" name="join_date" required>
    <input type="submit" value="save">
</form>
</body>
</html>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])&& isset($_POST['number'])&& isset($_POST['join_date'])) {
    $student = [
        "id" => uniqid(),
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "number" => $_POST['number'],
        "join_date" => $_POST['join_date']
    ];
    $data = file_get_contents('./students.json');
    $students = json_decode($data, true);
    array_push($students, $student);
    $data = json_encode($students, JSON_PRETTY_PRINT);
    file_put_contents('./students.json', $data);
    echo "
        <script>
        window.location.href = '../students.php';
        </script>
    ";
}
?>