<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$student_edit = [
    "id" => "",
    "name" => "",
    "email" => "",
    "phone" => "",
    "number" => "",
    "join_date" => ""
];
if (isset($_GET['id'])) {
    $data = file_get_contents('./students.json');
    $students = json_decode($data, true);
    foreach ($students as $student) {
        if ($student['id'] == $_GET['id']) {
            $student_edit = $student;
            break;
        }
    }
}
?>
<body>
<h1>Edit student</h1>
<form method="POST" action="" class="container">
    <input type="hidden" name="id" value="<?php echo $student_edit['id']; ?>">
    <input class="form-control my-3" type="text" placeholder="Name" name="name" value="<?php echo $student_edit['name']; ?>">
    <input class="form-control my-3" type="email" placeholder="Email" name="email"
           value="<?php echo $student_edit['email']; ?>">
    <input class="form-control my-3" type="text" placeholder="Phone number" name="phone"
           value="<?php echo $student_edit['phone']; ?>">
    <input class="form-control my-3" type="text" placeholder="Enroll number" name="number"
           value="<?php echo $student_edit['number']; ?>">
    <input class="form-control my-3" type="date" placeholder="Join date" name="join_date"
           value="<?php echo $student_edit['join_date']; ?>">
    <input class="form-control btn btn-primary" type="submit" value="save">
</form>
</body>
</html>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['number']) && isset($_POST['join_date'])) {
    $student_edit = [
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "number" => $_POST['number'],
        "join_date" => $_POST['join_date']
    ];
    $data = file_get_contents('./students.json');
    $students = json_decode($data, true);

    foreach ($students as $key => $student) {
        if ($student['id'] == $_GET['id']) {
            $students[$key] = $student_edit;
            break;
        }
    }


    $data = json_encode($students, JSON_PRETTY_PRINT);
    file_put_contents('./students.json', $data);
    echo "
            <script>
            window.location.href = '../students.php';
            </script>
        ";
}
?>